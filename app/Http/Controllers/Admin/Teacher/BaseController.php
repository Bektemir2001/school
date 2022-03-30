<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;

use App\Http\Service\Teacher\Service;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    public function __construct(Service $service)
    {
        return $this->service = $service;
    }
}
