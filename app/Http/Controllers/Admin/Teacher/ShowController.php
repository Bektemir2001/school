<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Teacher $teacher)
    {
        $teacher['user'] = $teacher->user;
        $teacher['lesson'] = $teacher->lesson;
        return $teacher;
    }
}
