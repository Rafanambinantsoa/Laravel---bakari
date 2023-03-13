<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Log_add extends FormRequest
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
            'nom' =>'required',
            'lieu' =>'required',
            'prix' =>'required',
            'superficie' =>'required',
            'lit' =>'required',
            'douche' =>'required',
            'garage' =>'required',
            'description' =>'required',
            'image1' =>'required',
            'image2' =>'required',
            'image3' =>'required'
        ];
    }
}
