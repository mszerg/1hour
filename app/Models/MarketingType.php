<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MarketingType extends Model
{
    use HasFactory;
    //use SoftDeletes;
    protected $dateFormat = 'd-m-Y H:i:s';
    protected $table = 'marketing_types';
    protected $guarded = []; //разрешаем добавление данных во все поля
    //protected $fillable = ['PostPeremenType', 'TypeMarketing'];
    public $timestamps = false;
}
