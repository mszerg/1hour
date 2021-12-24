<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $table = 'managers';
    protected $dateFormat = 'd-m-Y H:i:s';
    protected $guarded = false;
    public $timestamps = false;

}
