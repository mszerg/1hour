<?php

namespace App\Http\Requests\Front\Accruals;

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
            'OKPO_F'=>'required|string',
            'NAME_F'=>'required|string',
            'NAME_KORR'=>'required|string',
            'DATA_DOC'=>'required|date',
            'SUM_IN'=>'required|numeric',
            'N_P'=>'string|nullable',
            'CFO'=>'integer|nullable',
            'D_R'=>'required|integer',
        ];
    }
}
