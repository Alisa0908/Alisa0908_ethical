<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EthicalRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'company' => 'required|string|max:50',
            'price' => 'required|integer|min:1',
            'image_url' => 'required|active_url',
            'goods_url' => 'required|active_url',
            'category' => 'required|string',
            'materials' => 'required|string',
            'logistics' => 'required|string',
        ];
    }
}
