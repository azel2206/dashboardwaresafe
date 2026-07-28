<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function summary()
    {
        return response()->json([
            "zone" => 2,
            "device" => 2,
            "sensor" => 11,
            "alert" => 4
        ]);
    }
}