<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTripRequest;
use App\Http\Requests\UpdateTripRequest;
use App\Models\Trip;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::all(['id', 'title', 'region', 'start_date', 'duration_days', 'price_per_person']);

        return response()->json($trips,200);
    }

}
