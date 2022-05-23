<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class PropertyStoreRequest extends FormRequest
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

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

    public function rules()
    {
        return [
            'name'=>'required|string|max:500|min:8',
            'descripcion'=>'required|string|max:500|min:8',
            'area'=>'required|integer|max:500|min:8',
            'precio'=>'required|integer|max:500000000|min:8',
            'caracteristicas'=>'required|string|max:500|min:8',
            'city' => 'required|string|max:50|min:4',
            'comentarios'=>'|string|max:500|min:8',
            'likes'=>'|string|max:500|min:8',
        ];
    }
}
