<?php

namespace Tests\Feature\Employees;

use App\DB\Enum\UserTypeEnum;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\BaseTestCase;

class EmployeeGoalRateTest extends BaseTestCase
{
    use WithFaker;

    public function test_store_pass()
    {
        $response = $this->sendRequest('POST',
            route('api.employee_goal_rates.store', []),
            [
                'employee_id' => 1,
                'goal_id' => 1,
                'progress' => 55,
            ]
        );
        $response->dump()->assertStatus(200);
    }
}
