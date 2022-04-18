<?php
declare(strict_types=1);

namespace App\Http\Controllers\V1\Item;

use App\Http\Controllers\Controller;
use App\Services\V1\Item\Service;

class BaseController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
