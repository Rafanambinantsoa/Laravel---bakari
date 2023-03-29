<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Client_val extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' =>'required|email',
            'nom' =>'required|min :3',
            'adresse' =>'required|min :5',
            'phone' =>'required|min :10',
            'cart_number' => 'required',
            'expiration' => 'required',
            'cvv' => 'required',
            'adresse' => 'required',
            'province' => 'required',

        ];
    }
}
