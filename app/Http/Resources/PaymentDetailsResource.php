<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentDetailsResource extends JsonResource
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
            'type' => 'Payment Details',
            'attributes' => [
                'users_id'=> $this->users_id,
                'amount' => $this->amount,
                'paid_by' => $this->paid_by,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
        ]
        ];
    }
}
