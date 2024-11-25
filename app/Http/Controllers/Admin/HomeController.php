<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlightData;

class HomeController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $flightData = FlightData::all();
        $totals = [
            'totalFlightTime' => $flightData->sum('flight_time'),
            'totalPesticideLiters' => $flightData->sum('pesticide_liters'),
            'totalNumberOfFlights' => $flightData->sum('number_of_flights'),
        ];

        return view('admin.index', compact('flightData', 'totals'));
    }
}
