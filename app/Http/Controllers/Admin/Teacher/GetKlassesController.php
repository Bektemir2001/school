<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Admin\Teacher\BaseController;
use App\Http\Requests\Admin\Teacher\AddKlassesRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class GetKlassesController extends BaseController
{
    public function __invoke(Teacher $teacher)
    {
        $datas = $teacher->klass;
        $i = 0;
        $ids = [];
        foreach ($datas as $data){
            $ids[$i] = $data['id'];
            $i += 1;
        }
        if(!$datas){return [];}
        return $ids;
    }
}
