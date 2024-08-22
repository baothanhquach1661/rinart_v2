<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'delivery_area_id',
        'full_name',
        'email',
        'phone',
        'address',
    ];

    function deliveryArea()
    {
        return $this->belongsTo(Delivery::class, 'delivery_area_id');
    }
}
