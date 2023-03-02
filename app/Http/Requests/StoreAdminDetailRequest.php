<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminDetailRequest extends FormRequest
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
            'name'     => 'required|min:3|max:255',
            'email'    => 'required|email:dns',
            'username' => 'required|unique:users|min:3',
            'password' => 'required|min:3',
            'id_dojo'  => 'required',
            'no_hp'    => 'required'
        ];
    }
}
