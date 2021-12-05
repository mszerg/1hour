<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    //protected $connection = 'sqlsrv_taller';
    protected $dateFormat = 'd-m-Y H:i:s';
    protected $table = 'IMPORT_BANK';
    protected $guarded = []; //разрешаем добавление данных во все поля

}
