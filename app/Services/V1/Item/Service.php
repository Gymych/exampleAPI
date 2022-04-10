<?php

namespace App\Services\V1\Item;

use App\Models\V1\Category;
use App\Models\V1\Item;
use Exception;
use Illuminate\Support\Facades\DB;

class Service
{
    public function create($data)
    {
        try {
            Db::beginTransaction();

            $categories = $this->getCatIds($data['categories']);
            $item = Item::create($data);
            $item->categories()->attach($categories);

            Db::commit();
        } catch (Exception $exception) {
            Db::rollBack();
            return $exception->getMessage();
        }
        return $item;
    }

    private function getCatIds($categories)
    {
        $catIds = [];
        foreach ($categories as $category) {
            $category = !isset($category['id']) ? Category::create($category) : Category::findOrFail($category['id']);
            $catIds[] = $category->id;
        }
        return $catIds;
    }
}
