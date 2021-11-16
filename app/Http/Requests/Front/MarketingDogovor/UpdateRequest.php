<?php

namespace App\Http\Requests\Front\MarketingDogovor;

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
            'NumDogovor'=>'string|nullable',
            'OKPO_post'=>'required|string',
            'Name_post'=>'required|string',
            'DB_dogovor'=>'date',
            'DE_dogovor'=>'date|nullable',
            'Active'=>'',
            'Dogovor_text'=>'string|nullable',
            'Scancopy'=>'file'
        ];
    }
}
