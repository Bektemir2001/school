<?php

namespace App\Http\Controllers\Admin\Plan;

use App\Http\Controllers\Admin\Plan\BaseController;
use App\Models\Student;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Student $student)
    {
        $student['user'] = $student->user;
        $student['klass'] = $student->klass;
        return $student;
    }
}
