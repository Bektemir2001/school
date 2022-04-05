<?php

namespace App\Http\Controllers\Admin\Plan;

use App\Http\Controllers\Admin\Plan\BaseController;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Student $student)
    {
        $user_id = $student['user_id'];
        $user = User::find($user_id);
        $student->delete();
        $user->delete();

        return response([]);
    }
}
