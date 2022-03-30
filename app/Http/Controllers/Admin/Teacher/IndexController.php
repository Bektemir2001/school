<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Admin\Teacher\BaseController;
use App\Models\Teacher;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $teachers = Teacher::all();
        foreach ($teachers as $teacher){
            $teacher['user'] = $teacher->user;
    }
        return $teachers;
    }
}
