<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Str;

class AuthorUpdateRequest extends FormRequest
{

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(),422));
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'id' => Str::slug($this->id),
        ]);
    }

    public function rules()
    {
        return [
            'id'=>'required|integer|exists:authors,id',
            'name'=>'required',
        ];
    }
}
