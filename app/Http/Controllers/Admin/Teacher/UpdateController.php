<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Admin\Teacher\BaseController;
use App\Http\Requests\Admin\Teacher\UpdateRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Teacher $teacher)
    {
        $data = $request->validated();

        $this->service->update($data, $teacher);
        return response([]);
    }
}
