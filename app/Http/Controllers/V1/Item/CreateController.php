<?php

namespace App\Http\Controllers\V1\Item;

use App\Http\Requests\V1\Item\CreateRequest;
use App\Http\Resources\V1\ItemResource;
use App\Models\V1\Item;

class CreateController extends BaseController
{
    public function __invoke(CreateRequest $request)
    {
        $data = $request->validated();
        $item = $this->service->create($data);
        return $item instanceof Item ? ItemResource::make($item) : $item;
    }
}
