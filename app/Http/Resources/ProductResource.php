<?php

namespace App\Http\Resources;

use App\Http\Resources\BrandResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->title,
            'marca' => new BrandResource($this->whenLoaded('brand')),
            'reviews' => ProductReviewResource::collection($this->whenLoaded('reviews'))
        ];
    }
}
