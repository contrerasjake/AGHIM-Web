<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarOwner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'contact'];
    
    protected $hidden = ['created_at', 'updated_at', 'laravel_through_key'];
    
    public function car(){
        return $this->hasManyThrough(
            '\App\Models\Car',
            '\App\Models\OwnerCar',
            'owner_id',
            'id',
            'id',
            'car_id'
        );
    }
}
