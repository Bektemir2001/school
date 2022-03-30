<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Admin\Teacher\BaseController;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Teacher $teacher)
    {
        $teacher['user'] = $teacher->user;
        $teacher['lesson'] = $teacher->lesson;
        return $teacher;
    }
}
