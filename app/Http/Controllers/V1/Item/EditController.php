<?php

namespace App\Http\Controllers\V1\Item;

use App\Http\Requests\V1\Item\EditRequest;
use App\Http\Resources\V1\ItemResource;
use App\Models\V1\Item;

class EditController extends BaseController
{
    public function __invoke(Item $item, EditRequest $request)
    {
        $data = $request->validated();
        $item = $this->service->update($data, $item);
        return $item instanceof Item ? ItemResource::make($item) :
            response()->json(['message' => $item], 422);
    }
}
