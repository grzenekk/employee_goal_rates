<?php

namespace App\DB\Repositories;

use App\DB\Models\Employee;
use App\DB\Models\EmployeeGoalRate;
use App\DB\Models\LottoResult;

class EmployeeGoalRateRepository extends BaseRepository
{
    protected $model = EmployeeGoalRate::class;

}
