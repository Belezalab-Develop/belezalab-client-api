<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductReviewResource extends JsonResource
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

            'user_name' => $this->user_name,
            'user_email' => $this->user_email,
            'coments' => $this->coments,
            'general_rating' => $this->general_rating,
            'presentacion' => $this->presentacion,
            'aroma' => $this->aroma,
            'textura' => $this->textura,
            'durabilidad' => $this->durabilidad,
            'fac_uso' => $this->fac_uso,
            'eficacia' => $this->eficacia,
            'compraria' => $this->compraria,
            'calidad_precio' => $this->calidad_precio,
            'sustentabilidad' => $this->sustentabilidad,
            'user_registered' => $this->user_registered,
            'profile' => $this->profile,
            'image' => $this->image,
            'product_name' =>$this->product_name

        ];
    }
}
