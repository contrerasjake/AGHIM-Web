<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarsResource extends JsonResource
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
            'type' => 'Cars',
            'attributes' => [
                'owner' => $this->owner,
                'name' => $this->name,
                'description' => $this->description,
                'model_year' => $this->model_year,
                'brand' => $this->brand,
                'color' => $this->color,
                'speed' => $this->speed,
                'transmission' => $this->transmission,
                'engine' => $this->engine,
                'capacity' => $this->capacity,
                'plate_number' => $this->plate_number,
                'rate' => $this->rate,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ]
        ];
    }
}
