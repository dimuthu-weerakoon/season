<?php

namespace App\Http\Requests;



use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            // 'category' => 'required',
            // 'nic' => 'required|max:12|unique:users',
            // 'student_reg_no' => 'required|string|min:2|max:255|unique:users',
            'name' => 'required|max:255',
            // 'gender	' => 'required',
            // 'age' => 'required|numeric|min:6|max:40',
            // 'date_of_birth'=> 'required|date',
            // 'address'=>'required|string|min:2|max:255',	
            // 'contact_no'=>'required|numeric|digits_between:9,12',	
            // 'province'=>'required',	
            // 'district'=>'required',
            // 'postal_code'=>	'required|numeric',
            // 'depot'=>'required|string',
            // 'institute'=>'required|string|min:3|max:100',	
            // 'route_no'=>'required|string|min:1|max:10',	
            // 'starting_point'=>'required|string|min:3|max:22',	
            // 'interchanging_point'=>'nullable|min:3|max:22',
            // 'destination_point'=> 'required|string|min:3|max:22',	
            // 'ticket_fee'=> 'required|numeric|regex:/^\d*(\.\d{2})?$/',
            // 'permission_letter'=>'required|mimes:png,jpg,pdf',
            'email' => 'required|email|string|max:255|unique:users',
            'password' => 'required|min:8|max:225|confirmed'
        ];
    }
}
