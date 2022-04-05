<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Admin\Teacher\BaseController;
use App\Http\Requests\Admin\Teacher\AddKlassesRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AddKlassesController extends BaseController
{
    public function __invoke(AddKlassesRequest $request, Teacher $teacher)
    {
        $data = $request->validated();

        $data = $data['klasses'];
        $teacher->klass()->sync($data);
        return $data;
    }
}
