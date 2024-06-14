<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class BaseRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        $resp = [];
        $resp['data'] = [];
        $resp['data']['message'] = __('Operacja nie powiodła się.');
        $resp['data']['errors'] = $validator->errors();
        throw new HttpResponseException(response()->json($resp, 400));
    }
}
