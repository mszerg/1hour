<?php

namespace App\Http\Requests\Front\MarketingDogovor\Podch;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'TypeMarketing'=>'required|int',
            'Percent'=>'numeric',
            'SumMarketing'=>'numeric',
            'Brand'=>'string',
            'FioManager'=>'int',
            'id_marketing_dogovors'=>'required|int'
        ];
    }
}
