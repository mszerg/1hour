<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingDogovor extends Model
{
    use HasFactory;
    protected $dateFormat = 'd-m-Y H:i:s';
    protected $table = 'marketing_dogovors';
    protected $guarded = []; //разрешаем добавление данных во все поля
    //protected $fillable = array('NumDogovor','OKPO_post','Name_post','DB_dogovor','DE_dogovor','Active','Dogovor_text','Scancopy');

    public function usloviya()
    {

        return $this->hasMany(MarketingDogovorPodch::class,'marketing_dogovors_id','id');
        //return $this->belongsTo(MarketingType::class,'marketing_types_id','id');
    }

    public function post(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Post::class,'Name_post','PostNo');
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter) {
        return $filter->apply($builder);
    }
}

