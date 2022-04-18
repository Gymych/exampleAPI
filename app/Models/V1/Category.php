<?php
declare(strict_types=1);

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_categories', 'category_id', 'item_id');
    }
}
