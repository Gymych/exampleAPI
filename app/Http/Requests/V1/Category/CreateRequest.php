<?php

namespace App\Http\Requests\V1\Category;

use App\Http\Requests\V1\ApiRequest;

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
            'name' => 'string|required'
        ];
    }
}
