<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZoneController extends Controller
{
    public function index()
    {
        return response()->json(
            DB::table('zones')->get()
        );
    }
}