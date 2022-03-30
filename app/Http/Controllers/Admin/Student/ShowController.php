<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Admin\Student\BaseController;
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
