<?php
declare(strict_types=1);

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

    public function update($data, Item $item)
    {
        try {
            Db::beginTransaction();

            if (isset($data['categories'])) {
                $categories = $this->getCatIds($data['categories']);
                $item->categories()->sync($categories);
            }
            $item->update($data);

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
            $category = !isset($category['id']) ? Category::firstOrCreate(['name' => $category['name']]) : Category::findOrFail($category['id']);
            if (!in_array($category->id, $catIds)) {
                $catIds[] = $category->id;
            }
        }
        if (count($catIds) < 2){
            throw new Exception('Item must have at least 2 categories');
        }
        return $catIds;
    }
}
