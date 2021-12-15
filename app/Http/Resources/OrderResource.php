<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'type' => 'Orders',
            'attributes' => [
                'users_id'=> $this->users_id,
                'total_amount'=> $this->total_amount,
                'order_status'=> $this->order_status,
                'created_at' => $this->created_at,

        ]
        ];
    }
}
