<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageDetailsRequest extends FormRequest
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
            'users_id'=> 'required|max:255',
            'pickup_location' => 'required|max:255',
            'dropoff_location' => 'required|max:255',
            'receiver_name' => 'required|max:255',
            'receiver_contact' => 'required|max:255',
            'pickup_date' => 'required|max:255',
            'pickup_time' => 'required|max:255',
            'weight' => 'required|max:255',
            'amount' => 'required|max:255',
            'parcel_description' => 'required|max:255',
        ];
    }
}
