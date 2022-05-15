<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SingleHandicapResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'fullname' => $this->fullname,
            'adress' => $this->adress,
            'year_of_birth' => $this->year_of_birth,
            'needed_money' => $this->needed_money,
            'image' => $this->main_image
        ];
    }
}
