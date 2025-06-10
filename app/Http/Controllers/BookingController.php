<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;

class BookingController extends Controller
{
    


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        if(!$request->token){
            return response()->json(['message'=>'Token missing'], 401);
        }

        if($request->token != md5($request->email . 'canadarocks')){
            return response()->json(['message'=>'Invalid token'], 403);
        }

        $validated = $request->validated();

        if (!$validated){
            return response()->json(['message'=>'Invalid input'], 422);
        }

        $booking = Booking::create($validated);

        return response()->json([
            'trip_id' => $booking->trip_id,
            'name' => $booking->name,
            'email' => $booking->email,
            'number_of_people' => $booking->number_of_people,
            'token' => md5($booking->email . 'canadarocks')
        ], 201);
    }

}
