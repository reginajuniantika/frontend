<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    // Method to store new device data
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create new device
        $device = Device::create([
            'name' => $request->name,
        ]);

        // Return response
        return response()->json(['device' => $device], 201);
    }
}
