<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlightData;

class FlightDataController extends Controller
{
    public function create()
    {
        return view('admin.forms');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'flight_time' => 'required|integer|min:0',
            'pesticide_liters' => 'required|numeric|min:0',
            'number_of_flights' => 'required|integer|min:0',
        ]);

        FlightData::create($validatedData);

        return redirect()->route('admin.index')->with('success', 'Data successfully added!');
    }

    public function index()
    {
        $flightData = FlightData::all();

        $totals = [
            'totalFlightTime' => $flightData->sum('flight_time'),
            'totalPesticideLiters' => $flightData->sum('pesticide_liters'),
            'totalNumberOfFlights' => $flightData->sum('number_of_flights'),
        ];
        
        return view('admin.index', compact('flightData', 'totals'));
    }

    public function showIndex()
    {
        $flightData = FlightData::all();
        $totals = [
            'totalFlightTime' => $flightData->sum('flight_time'),
            'totalPesticideLiters' => $flightData->sum('pesticide_liters'),
            'totalNumberOfFlights' => $flightData->sum('number_of_flights'),
        ];

        return view('frontend.index', compact('flightData', 'totals'));
    }
}
