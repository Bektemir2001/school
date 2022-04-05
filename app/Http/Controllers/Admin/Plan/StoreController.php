<?php

namespace App\Http\Controllers\Admin\Plan;

use App\Http\Controllers\Admin\Plan\BaseController;
use App\Http\Requests\Admin\Plan\StoreRequest;
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
