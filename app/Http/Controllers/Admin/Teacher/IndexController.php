<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Admin\Teacher\BaseController;
use App\Http\Resources\Admin\TeacherResource;
use App\Models\Teacher;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $teachers = Teacher::all();
        return TeacherResource::collection($teachers);
    }
}
