<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'model_year' => 'required|max:255',
            'brand' => 'required|max:255',
            'color' => 'required|max:255',
            'speed' => 'required|max:255',
            'transmission' => 'required|max:255',
            'engine' => 'required|max:255',
            'capacity' => 'required|max:255',
            'plate_number' => 'required|max:255',
            'rate' => 'required|max:255'
        ];
    }
}
