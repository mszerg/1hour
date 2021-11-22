<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingDogovorPodch extends Model
{
    use HasFactory;
    protected $table = 'marketing_dogovor_podches';
    protected $dateFormat = 'd-m-Y H:i:s';
    protected $guarded = []; //разрешаем добавление данных во все поля

    public function dogovor_podch()
    {
        return $this->hasMany(MarketingType::class,'id','TypeMarketing');
    }
}
