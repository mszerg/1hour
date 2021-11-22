<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingDogovor extends Model
{
    use HasFactory;
    protected $dateFormat = 'd-m-Y H:i:s';
    protected $table = 'marketing_dogovors';
    protected $guarded = []; //разрешаем добавление данных во все поля
    //protected $fillable = array('NumDogovor','OKPO_post','Name_post','DB_dogovor','DE_dogovor','Active','Dogovor_text','Scancopy');


}
