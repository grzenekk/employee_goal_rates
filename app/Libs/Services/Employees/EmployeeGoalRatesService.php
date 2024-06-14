<?php

namespace App\Libs\Services\Employees;

use App\DB\Repositories\EmployeeGoalRateRepository;
use App\Libs\Services\BaseService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Log;

class EmployeeGoalRatesService extends BaseService
{
    public function __construct(protected EmployeeGoalRateRepository $repository)
    {

    }

    public function save(array $input, int $id = null)
    {
        try {
            DB::beginTransaction();

            $this->repository->newQuery()->insert(
                [
                    'employee_id' => $input['employee_id'],
                    'goal_id' => $input['goal_id'],
                    'progress' => $input['progress'],
                    'created_at' => Carbon::now()
                ]
            );

            DB::commit();
            return true;

        } catch (\Throwable $e) {
            DB::rollBack();
            $this->codeErrors[] = $e->getMessage();
            return false;
        }
    }
}
