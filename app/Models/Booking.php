<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trip;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'name',
        'email',
        'number_of_people',
        'status'
    ];

    
    public function trips(){
        return $this->belongsTo(Trips::class);
    }
}
