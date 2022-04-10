<?php

namespace App\Http\Controllers\V1\Item;

use App\Http\Controllers\Controller;
use App\Http\Filters\ItemFilter;
use App\Http\Requests\V1\Item\FilterRequest;
use App\Models\V1\Item;

class ShowController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = new ItemFilter($data);
        return Item::filter($filter)->get();
    }
}
