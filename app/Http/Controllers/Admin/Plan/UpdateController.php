<?php

namespace App\Http\Controllers\Admin\Plan;

use App\Http\Controllers\Admin\Student\BaseController;
use App\Http\Requests\Admin\Plan\UpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Student $student)
    {
        $data = $request->validated();
        $this->service->update($data, $student);

        return response([]);
    }
}
