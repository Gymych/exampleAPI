<?php

namespace App\Http\Requests\V1\Item;

use App\Http\Requests\V1\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends ApiRequest
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
            'name' => 'string|required',
            'price' => 'numeric|required',
            'is_published' => 'boolean|required',
            'categories' => 'array|min:2|max:10|required',
            'categories.*' => 'array|min:1|max:2',
            'categories.*.id' => 'numeric|required_without:categories.*.name',
            'categories.*.name' => 'string|required_without:categories.*.id',
        ];
    }
}
