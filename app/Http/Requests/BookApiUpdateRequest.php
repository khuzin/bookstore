<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class BookApiUpdateRequest extends FormRequest
{

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(),422));
    }

    public function rules()
    {
        return [
            'id'=>'required|integer|exists:books,id',
            'title'=>'required',
            'content'=>'required',
        ];
    }
}
