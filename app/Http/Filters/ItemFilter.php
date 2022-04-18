<?php
declare(strict_types=1);

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ItemFilter extends AbstractFilter
{
    protected function getCallbacks(): array
    {
        return [
            'name' => [$this, 'name'],
            'category_id' => [$this, 'category_id'],
            'category_name' => [$this, 'category_name'],
            'is_published' => [$this, 'is_published'],
            'is_not_deleted' => [$this, 'is_not_deleted'],
            'max_price' => [$this, 'max_price'],
            'min_price' => [$this, 'min_price'],
        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%$value%");
    }
    public function category_id(Builder $builder, $value)
    {
        $builder->whereRelation('categories', 'category_id', $value);
    }
    public function category_name(Builder $builder, $value)
    {
        $builder->whereRelation('categories', 'categories.name', $value);
    }
    public function is_published(Builder $builder, $value)
    {
        $builder->where('is_published', "$value");
    }
    public function is_not_deleted(Builder $builder, $value)
    {
        if ($value == 0) {
            $builder->withTrashed()->whereNotNull('deleted_at');
        }
    }
    public function max_price(Builder $builder, $value)
    {
        $builder->where('price', '<=', "$value");
    }
    public function min_price(Builder $builder, $value)
    {
        $builder->where('price', '>=', "$value");
    }
}
