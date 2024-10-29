@extends('layouts.admin')
@section('content')
          <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Dashboard
            </h2>
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                  <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <img src="{{ asset('assets/icon/icon-flights.png') }}" class="w-5 h-5" alt="Flights" />
                  </div>
                  <div>
                    <p
                      class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                      Flights Time
                    </p>
                    <p
                      class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                    <!-- to show the total flight time -->
                    </p>
                  </div>
                </div>
                <div
                  class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                  <div
                    class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                  >
                    <img src="{{ asset('assets/icon/icon-pesticide.png') }}" class="w-5 h-5" alt="Pesticide" />
                  </div>
                  <div>
                    <p
                      class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                      Pesticide Liters
                    </p>
                    <!-- to show the total pesticide liter -->
                    <p
                      class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                    </p>
                  </div>
                </div>
                <div
                  class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                  <div
                    class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                  >
                    <img src="{{ asset('assets/icon/icon-numflights.png') }}" class="w-5 h-5" alt="NumFlights" />
                  </div>
                  <div>
                    <p
                      class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                      Number Flights
                    </p>
                    <!-- to show the total flight -->
                    <p
                      class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                    </p>
                  </div>
                </div>
            </div>
          </div>
@endsection