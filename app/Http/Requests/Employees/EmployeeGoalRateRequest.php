<?php

namespace App\Http\Requests\Employees;

use App\Http\Requests\BaseRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class EmployeeGoalRateRequest extends BaseRequest
{
    public function rules()
    {
        $rules = [
            'employee_id' => [
                'required',
                'integer',
                Rule::in(DB::table('employees')
                    ->select('id')->pluck('id')->toArray())
            ],
            'goal_id' => [
                'required',
                'integer',
                Rule::in(DB::table('goals')
                ->select('id')->pluck('id')->toArray())
            ],
            'progress' => ['required', 'integer', 'min:0', 'max:100'],
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            '*.required' => 'Pole jest wymagane',
            '*.integer' => 'Wartość musi być typu Integer',
            'progress.min' => 'Minimalna wartość to 0',
            'progress.max' => 'Maksymalna wartość to 100',
            '*.in' => 'Nieprawidłowa wartość',
        ];
    }
}
