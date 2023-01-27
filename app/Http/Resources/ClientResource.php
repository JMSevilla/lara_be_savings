<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            'id' => $this->id,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'province' => $this->province,
            'city' => $this->city,
            'zipcode' => $this->zipcode,
            'address' => $this->address,
            'account_type' => $this->account_type,
            'deposit_amount' => $this->deposit_amount,
            'mobile_number' => $this->mobile_number,
            'updated_at' => $this->update_at,
            'created_at' => $this->created_at
        ];
    }
}
