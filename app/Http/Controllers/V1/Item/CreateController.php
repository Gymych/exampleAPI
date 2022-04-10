<?php

namespace App\Http\Controllers\V1\Item;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Item\CreateRequest;
use App\Http\Resources\V1\ItemResource;
use App\Models\V1\Item;

class CreateController extends Controller
{
    public function __invoke(CreateRequest $request)
    {
        $categories = $request['categories'];
        $item = Item::create($request->all());
        $item->categories()->attach($categories);
        return ItemResource::make($item);
    }
}
