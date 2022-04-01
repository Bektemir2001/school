<?php

namespace App\Http\Controllers\Admin\Klass;

use App\Http\Controllers\Controller;
use App\Models\Klass;
use Illuminate\Http\Request;

class GetForTeacherController extends Controller
{
    public function __invoke()
    {
        $klasses = Klass::all();
        $data = [];
        $i = 0;
        foreach ($klasses as $klass){
            $teachers = $klass->teacher;
            $ids = [];
            $data[$i] = [
              'id' => $klass->id,
              'name' => $klass->name,
            ];
            foreach ($teachers as $teacher){
                array_push($ids, $teacher->id);
            }
            $data[$i]['teachers_id'] = $ids;
            $i += 1;
        }
        return $data;
    }
}
