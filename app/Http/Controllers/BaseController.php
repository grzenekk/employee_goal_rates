<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    public function responseSuccess(string $message, $data = [])
    {
        return response()->json(['message' => $message, 'data' => $data]);
    }

    public function responseFailed(string $message, $responseCode = 500, $errors = [], $showErrors = false)
    {
        if ($showErrors) {
            return response()->json(['message' => $message, 'errors' => $errors], $responseCode);
        }
        return response()->json(['message' => $message], $responseCode);
    }
}
