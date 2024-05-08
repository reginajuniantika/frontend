<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Log;

class ApiController extends Controller
{
    // Method untuk mengambil semua data device
    public function getAllDevices()
    {
        $devices = Device::all();
        return response()->json(['devices' => $devices], 200);
    }

    // Method untuk mengambil semua data log
    public function getAllLogs()
    {
        $logs = Log::all();
        return response()->json(['logs' => $logs],200);
    }
}
