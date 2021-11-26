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
}
