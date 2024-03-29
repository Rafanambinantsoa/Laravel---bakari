<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Client_val_1 extends FormRequest
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
            'email' =>'required|email|min :3',
            'password' =>'required|min :3',
        ];
    }
}
