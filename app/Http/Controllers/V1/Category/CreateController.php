<?php
declare(strict_types=1);

namespace App\Http\Controllers\V1\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Category\CreateRequest;
use App\Models\V1\Category;

class CreateController extends Controller
{
    public function __invoke(CreateRequest $request)
    {
        $category = Category::where('name', $request['name'])->first();
        $message =  $category ? 'Category already exists.': 'Category created.';
        $category = $category ?: Category::create(['name' => $request['name']]);
        return response()->json(['data' => $category, 'message' => $message], 200);
    }
}
