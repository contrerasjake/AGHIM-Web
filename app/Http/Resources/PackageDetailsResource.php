<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PackageDetailsResource extends JsonResource
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
            'id' => (string)$this->id,
            'type' => 'Package Details',
            'attributes' => [
                'users_id'=> $this->users_id,
                'pickup_location' => $this->pickup_location,
                'dropoff_location' => $this->dropoff_location,
                'receiver_name' => $this->receiver_name,
                'receiver_contact' => $this->receiver_contact,
                'pickup_date' => $this->pickup_date,
                'pickup_time' => $this->pickup_time,
                'weight' => $this->weight,
                'amount' => $this->pickup_time,
                'parcel_description' => $this->parcel_description,
        ]
        ];
    }
}
