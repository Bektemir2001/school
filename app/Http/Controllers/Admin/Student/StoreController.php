<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Admin\Student\BaseController;
use App\Http\Requests\Admin\Student\StoreRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return response([]);
    }
}
