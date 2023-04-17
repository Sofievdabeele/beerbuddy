<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewBeerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'type' => 'required|string',
            'country' => 'required|string',
            'alcohol_percentage' => 'required|numeric|decimal:1',
            'brewery' => 'required|string',
            'info' => 'required|string|max:10000'
        ];
    }
    public function messages(): array
    {
        return [      
            'name.required' => 'Name of the beer is required',           
            'type.required' => 'Type of beer is required',           
            'country.required' => 'Please provide the country where the beer is made',
            'country.string' => 'Please provide the country where the beer is made',
            'alcohol_percentage.required' => 'Please provide alcohol percentage of the beer',
            'alcohol_percentage.float' => 'Please provide a nuber with max 1 decimale',
            'brewery' => 'Please provide the brewery where the beer is made',
            'password.required' => 'Please provide a password',
            'info' => 'Please provide some info about the beer',
            'info.max' => 'Message can only be 1000 characters',
            'message.max' => 'Message can only be 10000 characters'
        ];
    }
}
