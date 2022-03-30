<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Admin\Teacher\BaseController;
use App\Http\Requests\Admin\Teacher\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return response([]);
    }
}
