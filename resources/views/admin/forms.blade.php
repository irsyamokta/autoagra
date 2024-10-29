@extends('layouts.admin')
@section('content')
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Report Form
            </h2>
              <div
                class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
              >
              <form action="{{ route('admin.store') }}" method="POST">
                  @csrf
                  <label class="block text-sm">
                      <span class="text-gray-700 dark:text-gray-400">Flight Time</span>
                      <input name="flight_time" type="number" step="1" required class="form-input" placeholder="Enter flight time in minutes" />
                  </label>
                  <label class="block mt-4 text-sm">
                      <span class="text-gray-700 dark:text-gray-400">Pesticide Liters</span>
                      <input name="pesticide_liters" type="number" step="0.1" required class="form-input" placeholder="Enter amount in liters" />
                  </label>
                  <label class="block mt-4 text-sm">
                      <span class="text-gray-700 dark:text-gray-400">Number of Flights</span>
                      <input name="number_of_flights" type="number" min="0" required class="form-input" placeholder="Enter number of flights" />
                  </label>
                  <button type="submit" class="w-full mt-6 bg-purple-600 text-white">Submit</button>
              </form>

              </div>
          </div>
@endsection
