<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    public function office()
    {
        return DB::table('sensor_data')
            ->join('sensors', 'sensor_data.sensor_id', '=', 'sensors.sensor_id')
            ->join('devices', 'sensors.device_id', '=', 'devices.device_id')
            ->join('zones', 'devices.zone_id', '=', 'zones.zone_id')
            ->where('zones.zone_name', 'Office')
            ->select(
                'sensors.sensor_type as label',
                'sensor_data.value as value',
                'sensor_data.timestamp'
            )
            ->orderByDesc('sensor_data.timestamp')
            ->get()
            ->groupBy('label')
            ->map(fn($items) => $items->first())
            ->values();
    }

    public function warehouse()
    {
        return DB::table('sensor_data')
            ->join('sensors', 'sensor_data.sensor_id', '=', 'sensors.sensor_id')
            ->join('devices', 'sensors.device_id', '=', 'devices.device_id')
            ->join('zones', 'devices.zone_id', '=', 'zones.zone_id')
            ->where('zones.zone_name', 'Warehouse')
            ->select(
                'sensors.sensor_type as label',
                'sensor_data.value as value',
                'sensor_data.timestamp'
            )
            ->orderByDesc('sensor_data.timestamp')
            ->get()
            ->groupBy('label')
            ->map(fn($items) => $items->first())
            ->values();
    }
}