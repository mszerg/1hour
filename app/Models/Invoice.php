<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoice';
    protected $dateFormat = 'd-m-Y H:i:s';
    protected $guarded = []; //разрешаем добавление данных во все поля

    public function mdpodch() {
        return $this->belongsTo(MarketingDogovorPodch::class,'marketing_dogovors_podches_id','id');
    }
    public function manager(){
        return $this->belongsTo(Manager::class,'managers_id','id');
    }

}

