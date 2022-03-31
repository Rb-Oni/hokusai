<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'img' => 'nullable|image|mimes:jpg,png,jpeg,svg|max:10240',
            'name' => 'required',
            'category_id' => 'required',
            'volume' => 'nullable',
            'author' => 'nullable',
            'date' => 'nullable',
            'fv_editor' => 'nullable',
            'ov_editor' => 'nullable',
            'paperback_price' => 'nullable',
            'digital_price' => 'nullable',
            'quantity' => 'nullable',
            'synopsis' => 'nullable',
            'language' => 'nullable',
            'isbn10' => 'nullable',
            'isbn30' => 'nullable',
            'pages' => 'nullable',
            'weight' => 'nullable',
            'size' => 'nullable',
            'title' => 'nullable',
            'origin' => 'nullable',
            'fv_volumes_number' => 'nullable',
            'ov_volumes_number' => 'nullable'
        ];
    }
}
