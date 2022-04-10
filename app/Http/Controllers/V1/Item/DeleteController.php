<?php

namespace App\Http\Controllers\V1\Item;

use App\Http\Controllers\Controller;
use App\Models\V1\Item;

class DeleteController extends Controller
{
    public function __invoke(Item $item)
    {
        $item->delete();
        return response()->json(['message' => 'Item deleted successfully.'], 200);
    }
}
