<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    // Method to store new log data
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'device_id' => 'required|exists:devices,id',
            'data' => 'required|string',
        ]);

        // Create new log
        $log = Log::create([
            'device_id' => $request->device_id,
            'data' => $request->data,
        ]);

        // Return response
        return response()->json(['log' => $log], 201);
    }
}
