<?php

namespace App\Http\Controllers\Front\Accruals\Invoice;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function __invoke()
    {
        return DB::select('
SELECT
  invoice.id
 ,Post.OKPO
 ,Post.Name AS NamePost
 ,marketing_dogovors.NumDogovor
 ,marketing_types.TypeMarketing
 ,invoice.DateInvoice
 ,invoice.SumItogo
 ,invoice.Comment
 ,managers.name AS NameManager
 ,invoice.import_bank_id
 ,IIF(invoice.import_bank_id IS NULL, 0, 1) AS [check]
FROM dbo.marketing_dogovor_podches
INNER JOIN dbo.invoice
  ON marketing_dogovor_podches.id = invoice.marketing_dogovors_podches_id
INNER JOIN dbo.marketing_types
  ON marketing_dogovor_podches.marketing_types_id = marketing_types.id
INNER JOIN dbo.marketing_dogovors
  ON marketing_dogovor_podches.marketing_dogovors_id = marketing_dogovors.id
INNER JOIN dbo.Post
  ON marketing_dogovors.Name_post = Post.PostNo
INNER JOIN dbo.managers
  ON managers.id = invoice.managers_id');
    }
}
