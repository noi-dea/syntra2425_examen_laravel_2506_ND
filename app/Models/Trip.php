<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;
use App\Traits\HasUuid;

class Trip extends Model
{
    /** @use HasFactory<\Database\Factories\TripFactory> */
    use HasFactory;
    use HasUuid;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'region',
        'start_date',
        'duration_days',
        'price_per_person'
    ];

    public function booking(){
        return $this->hasMany(Booking::class);
    }
    
}
