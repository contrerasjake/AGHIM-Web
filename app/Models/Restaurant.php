<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public function food() 
    {
        return $this->hasManyThrough(
            '\App\Models\Food', 
            '\App\Models\RestaurantFood',
            'restaurant_id',
            'id',
            'id',
            'food_id',
        );
    }
}
