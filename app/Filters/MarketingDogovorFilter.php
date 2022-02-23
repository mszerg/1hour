<?php

namespace App\Filters;

class MarketingDogovorFilter extends QueryFilter
{
    public function Name_post($id=null){
        return $this->builder->when($id, function ($quiery) use($id) {
            $quiery->where('Name_post',$id);
        });

    }

    public function search_post($search_string=''){
        //dd($this->builder->toSql());
        return $this->builder->where('Name','LIKE','%'.$search_string.'%');
    }
}
