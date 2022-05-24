<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
            'nights' => 'max:3|numeric',
            'lodgers' => 'required|max:2|numeric',
            'rental_cost' => 'max:9|min:6|numeric',
            'cleaning_cost' => 'max:9|min:6|numeric',
            'service_cost' => 'max:9|min:6|numeric',
        ];
    }
}