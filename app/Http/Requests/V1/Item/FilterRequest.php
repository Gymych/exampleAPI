<?php

namespace App\Http\Requests\V1\Item;

use App\Http\Requests\V1\ApiRequest;

class FilterRequest extends ApiRequest
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
            'name' => 'string',
            'category_id' => 'numeric',
            'category_name' => 'string',
            'min_price' => 'numeric',
            'max_price' => 'numeric',
            'is_published' => 'boolean',
            'is_not_deleted' => 'boolean'
        ];
    }
}
