<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'city', 'building_name', 'building_address', 'room_number'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
