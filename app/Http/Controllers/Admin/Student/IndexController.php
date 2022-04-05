<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Admin\Student\BaseController;
use App\Http\Resources\Admin\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $students = Student::all();
        return StudentResource::collection($students);
    }
}
