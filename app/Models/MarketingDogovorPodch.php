<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class MarketingDogovorPodch extends Model
{
    use HasFactory;
    protected $table = 'marketing_dogovor_podches';
    protected $dateFormat = 'd-m-Y H:i:s';
    protected $guarded = []; //разрешаем добавление данных во все поля

    /*public function dogovor_podch()
    {
        return $this->hasMany(MarketingType::class,'md_podches_marketing_types_fk','id');
    }*/

    public function usloviya($marketing_dogovors_id)
    {
        //return $this->belongsTo(MarketingType::class,'marketing_types_id','id');
        $users = DB::select('select * from marketing_dogovor_podches where marketing_dogovors_id = ?', [$marketing_dogovors_id]);
    }

    public function allusloviya()
    {
        //return $this->belongsTo(MarketingType::class,'marketing_types_id','id');
        return DB::select('select * from marketing_dogovor_podches');
    }
}


