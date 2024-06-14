<?php

namespace App\Libs\Services;

use App\DB\Repositories\EmployeeGoalRateRepository;
use Illuminate\Support\Facades\DB;
use Log;

class BaseService
{
    public $errors = [];
    public $codeErrors = [];
}
