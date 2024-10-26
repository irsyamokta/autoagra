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
        // Validate incoming data
        $validatedData = $request->validate([
            'flight_time' => 'required|integer|min:0',
            'pesticide_liters' => 'required|numeric|min:0',
            'number_of_flights' => 'required|integer|min:0',
        ]);

        // Create a new FlightData record
        FlightData::create($validatedData);

        // Redirect to index with success message
        return redirect()->route('admin.index')->with('success', 'Data successfully added!');
    }

    public function index()
    {
        $flightData = FlightData::all();
        return view('admin.index', compact('flightData'));
    }
}
