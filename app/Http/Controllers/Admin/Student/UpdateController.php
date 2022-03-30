<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Admin\Student\BaseController;
use App\Http\Requests\Admin\Student\UpdateRequest;
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
