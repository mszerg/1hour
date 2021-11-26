<?php

namespace App\Http\Requests\Front\MarketingDogovor\Podch;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'Percent'=>'float',
            'SumMarketing'=>'float',
            'Comment'=>'string',
            'FioManager'=>'int',
            'id_marketing_dogovors'=>'required|int'
        ];
    }
}
