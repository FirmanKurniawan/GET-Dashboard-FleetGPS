<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GPS;
use App\Models\OBD2;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function gps()
    {
        $gps = GPS::orderBy('created_at', 'DESC')->take(5)->distinct()->get();
        return view('dashboard.gps', compact('gps'));
    }

    public function obd2()
    {
        $speed = OBD2::orderBy('updated_at', 'DESC')->take(5)->pluck('speed');
        $distance = OBD2::orderBy('updated_at', 'DESC')->take(5)->pluck('distance');
        $timeLabels = OBD2::orderBy('updated_at', 'DESC')->take(5)->pluck('updated_at');
        return view('dashboard.obd2', compact('speed', 'timeLabels', 'distance'));
    }

    public function getLocation()
    {
        $positions = GPS::select('id', 'longitude', 'latitude', 'created_at')->get();
        // $positions = [
        //     ['id' => 1, 'lat' => -1.1742548, 'lon' => 116.6769315],
        //     ['id' => 2, 'lat' => -1.2345678, 'lon' => 117.1234567],
        //     ['id' => 3, 'lat' => -6.1905982, 'lon' => 106.7622865,17],
        // ];

        return response()->json($positions);
    }

    public function getObd2()
    {
        $obd2 = OBD2::select('id', 'speedometer', 'fuel', 'accu', 'speed', 'temperature', 'distance', 'created_at')->latest()->get();
        // $obd2 = [
        //     [
        //         'id' => 1,
        //         'speedometer' => -1.1742548,
        //         'fuel' => 116.6769315,
        //         'accu' => 116.6769315,
        //         'speed' => 116.6769315,
        //         'temperature' => 116.6769315,
        //         'distance' => 116.6769315,
        //         'updated_at' => 116.6769315
        //     ],
        // ];

        return response()->json($obd2);
    }

    public function getObd2Latest()
    {
        $timeLabels = OBD2::orderBy('updated_at', 'ASC')->take(5)->pluck('updated_at');
        $speed = OBD2::orderBy('updated_at', 'ASC')->take(5)->pluck('speed');
        $distance = OBD2::orderBy('updated_at', 'ASC')->take(5)->pluck('distance');

        $response = [
            'timeLabels' => $timeLabels,
            'speed' => $speed,
            'distance' => $distance,
        ];
        return response()->json($response);
    }

    public function getDistance()
    {
        $distance = OBD2::orderBy('updated_at', 'ASC')->take(5)->pluck('distance');
        return response()->json($distance);
    }
}
