<?php
declare(strict_types=1);

namespace App\Http\Controllers\V1\Category;

use App\Http\Controllers\Controller;
use App\Models\V1\Category;
use App\Models\V1\Item;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {
        if ($category->items()->exists()) {
            $message = 'Can not delete. Category is in use.';
        } else {
            $category->delete();
            $message = 'Category deleted successfully.';
        }
        return response()->json(['message' => $message], 200);
    }
}
