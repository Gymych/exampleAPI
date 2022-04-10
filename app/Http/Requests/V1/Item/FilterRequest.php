<?php

namespace App\Http\Requests\V1\Item;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
            'name' => '',
            'category_id' => '',
            'category_name' => '',
            'min_price' => '',
            'max_price' => '',
            'is_published' => '',
            'is_not_deleted' => ''
        ];
    }
}