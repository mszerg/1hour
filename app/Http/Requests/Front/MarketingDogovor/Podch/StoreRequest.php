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
            'marketing_types_id'=>'required|int',
            'Percent'=>'numeric|nullable',
            'SumMarketing'=>'numeric|nullable',
            'Comment'=>'string|nullable',
            'managers_id'=>'int',
            'marketing_dogovors_id'=>'required|int'
        ];
    }
}
