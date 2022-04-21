<?php

namespace App\Http\Resources;

use App\Models\Image;
use Illuminate\Http\Resources\Json\JsonResource;

class HandicapResource extends JsonResource
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
            'mobile_number' => $this->mobile_number,
            'year_of_birth' => $this->year_of_birth,
            'ecocash_number' => $this->ecocash_number,
            'lumicash_number' => $this->lumicash_number,
            'bank_name' => $this->bank_name,
            'bank_account_number' => $this->bank_account_number,
            'story' => $this->story,
            'needed_money' => $this->needed_money,
            'state_of_health' => $this->state_of_health,
            'images' => Image::where('handicap_id', $this->id)->get(),
            'donation_status' => $this->donation_status,
            'user' => $this->user_id,
            'family_situation' => $this->family_situation
        ];
    }
}
