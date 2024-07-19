<?php

namespace App\Http\Controllers;

use App\Models\ShiftGroup;
use App\Models\ShiftWorkHour;
use App\Models\ShiftHourPattern;
use Illuminate\Http\Request;

class ShiftHourPatternController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('References/ShiftHourPattern/IndexView', [
            'shiftHourPatterns' => ShiftHourPattern::all()->load('shiftGroup', 'shiftWorkHour')
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ShiftHourPattern $shiftHourPattern)
    {
        $shiftHourPattern->load(['shiftGroup', 'shiftWorkHour']);
        return inertia('References/ShiftHourPattern/ShowView', [
            'shiftHourPattern' => $shiftHourPattern
        ]);
    }
}
