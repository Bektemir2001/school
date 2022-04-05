<?php

namespace App\Http\Controllers\Admin\Klass;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\KlassResource;
use App\Models\Klass;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Klass $klass)
    {
        return new KlassResource($klass);
    }
}
