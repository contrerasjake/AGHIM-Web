<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id', 
        'pickup_location', 
        'dropoff_location', 
        'receiver_name', 
        'receiver_contact', 
        'pickup_date', 
        'pickup_time',
        'weight',
        'amount',
        'parcel_description'
    
    ];
}
