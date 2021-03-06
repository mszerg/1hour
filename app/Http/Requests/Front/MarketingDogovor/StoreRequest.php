<?php

namespace App\Http\Requests\Front\MarketingDogovor;

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
            'NumDogovor'=>'string|nullable',
            'Name_post'=>'required|exists:Post,PostNo|unique:marketing_dogovors',
            'DB_dogovor'=>'date',
            'DE_dogovor'=>'date|nullable',
            'Active'=>'',
            'Dogovor_text'=>'string|nullable',
            'Scancopy'=>'file|nullable'

        ];
    }
}
