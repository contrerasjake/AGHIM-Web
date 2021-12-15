<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrackingDetailsResource extends JsonResource
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
            'type' => 'Tracking Details',
            'attributes' => [
                'package_details_id' => $this->package_details_id,
                'tracking_no' => $this->tracking_no,
                'delivery_status' => $this->delivery_status, 
        ]
        ];
    }
}
