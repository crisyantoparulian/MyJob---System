<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name'=>'required|max:60|min:2',
            'last_education'=>'required|max:50|min:2',
            'skills'=>'required|max:80|min:2',
            'phone_number'=>'required|max:50|min:2|integer',
            'place_of_birth'=>'required|max:50|min:2',
            'photo' => 'required|mimes|jpeg,bmp,png',
            'file_cv' => 'required|mimes:pdf|max:10000',
            'address'=>'required|max:150|min:10',
        ];
    }
}
