<?php

namespace Database\Seeders;

use App\Models\V1\Category;
use App\Models\V1\Item;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = Item::factory(20)->create();
        $categories = Category::factory(10)->create();

        foreach ($items as $item) {
            $catIds = $categories->random(random_int(2,10))->pluck('id');
            $item->categories()->attach($catIds);
        }
    }
}
