<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trip;
use App\Traits\HasUuid;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;
    use HasUuid;

    public $incrementing = false;
    protected $keyType = 'string';

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
