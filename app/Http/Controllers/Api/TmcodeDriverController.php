<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TmcodeDriver;
use Illuminate\Http\Request;

class TmcodeDriverController extends Controller
{
    public function getDriverVisits($driverId)
    {
        $records = TmcodeDriver::where('driver_id', $driverId)
            ->with('tmCode') // اگر مدل tmCode رابطه داشته باشد
            ->get();

        return response()->json($records);
    }
    public function markAsVisited(Request $request)
    {
        $request->validate([
            'driver_id' => 'required|exists:drivers,id',
            'tm_code_id' => 'required|exists:tm_codes,id',
        ]);

        $record = TmcodeDriver::where('driver_id', $request->driver_id)
            ->where('tm_code_id', $request->tm_code_id)
            ->first();

        if ($record) {
            $record->update(['status' => 'بازدید شده']);
            return response()->json(['message' => 'وضعیت به بازدید شده تغییر یافت.']);
        }

        return response()->json(['message' => 'رکوردی پیدا نشد.'], 404);
    }
}
