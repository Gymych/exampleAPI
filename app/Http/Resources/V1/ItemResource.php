<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $tmp_categories = [];
        foreach ($this['categories'] as $category) {
            $tmp_categories[] = $category->name;
        }
        return [
            'id' => $this->id,
            'name' => $this['name'],
            'price' => $this['price'],
            'created_at' => $this['created_at'],
            'categories' => implode(', ', $tmp_categories)
        ];
    }
}
