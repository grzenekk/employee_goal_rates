<?php

namespace App\Http\Controllers\Employees;

use App\DB\Repositories\EmployeeGoalRateRepository;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Employees\EmployeeGoalRateRequest;
use App\Libs\Services\Employees\EmployeeGoalRatesService;
use Illuminate\Http\Request;

class EmployeeGoalRateController extends BaseController
{
    public function __construct(protected EmployeeGoalRateRepository $repository, protected EmployeeGoalRatesService $service

    )
    {
    }

    public function index(Request $request)
    {

    }

    public function store(EmployeeGoalRateRequest $request)
    {
        if ($this->service->save($request->json()->all())) {
            return $this->responseSuccess(__('Pomyślnie dodano nowy postęp celu pracownika.'));
        }
        return $this->responseFailed(__('Nie udało się dodać nowego postępu celu pracownika.'), 500, $this->service->codeErrors, true);
    }

    public function create()
    {
    }

    public function edit($id)
    {
    }

    public function update()
    {
    }


    public function show($id)
    {
    }

    public function destroy(Request $request, $id)
    {
    }

}
