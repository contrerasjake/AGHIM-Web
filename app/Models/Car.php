<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'model_year', 'brand', 'color', 'speed', 'transmission', 'engine', 'capacity', 'plate_number', 'rate'];

    protected $hidden = ['created_at', 'updated_at', 'laravel_through_key'];

    public function owner(){
        return $this->hasManyThrough(
            '\App\Models\CarOwner',
            '\App\Models\OwnerCar',
            'car_id',
            'id',
            'id',
            'owner_id'
        );
    }
}
