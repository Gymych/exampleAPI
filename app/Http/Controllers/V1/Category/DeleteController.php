<?php

namespace App\Http\Controllers\V1\Category;

use App\Http\Controllers\Controller;
use App\Models\V1\Category;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return response()->json(['message' => 'Category deleted'], 200);
    }
}
