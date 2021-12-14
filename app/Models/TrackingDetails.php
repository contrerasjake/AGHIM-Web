<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingDetails extends Model
{
    use HasFactory;
    protected $fillable = ['package_details_id', 'tracking_no', 'delivery_status'];
}
