<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $city = $request->query('city');

        // Validate the city parameter
        if (!$city) {
            return response()->json(['error' => 'City parameter is required'], 400);
        }

        $apiKey = env('OPENWEATHER_API_KEY');

        // Validate API key
        if (!$apiKey) {
            return response()->json(['error' => 'OpenWeather API key is missing'], 500);
        }

        try {
            // Make the API request
            $response = Http::get("https://api.openweathermap.org/data/2.5/forecast", [
                'q' => $city,
                'appid' => $apiKey,
                'units' => $request->query('units', 'metric'),
            ]);

            // Check for successful response
            if ($response->successful()) {
                return response()->json([
                    'data' => $response->json(),
                    'message' => 'Weather data fetched successfully',
                ]);
            }

            // Handle API errors
            return response()->json([
                'error' => $response->json()['message'] ?? 'Error fetching weather data',
            ], $response->status());

        } catch (\Exception $e) {
            // Handle unexpected errors
            return response()->json([
                'error' => 'An unexpected error occurred',
                'details' => $e->getMessage(),
            ], 500);
        }
    }
}
