<?php

namespace App\Http\Controllers\Admin\Plan;

use App\Http\Controllers\Admin\Plan\BaseController;
use App\Models\Student;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $students = Student::all();
        foreach ($students as $student){
            $student['user'] = $student->user;
        }
        return $students;
    }
}
