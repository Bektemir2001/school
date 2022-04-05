<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\LessonResource;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Lesson $lesson)
    {
        return new LessonResource($lesson);
    }
}
