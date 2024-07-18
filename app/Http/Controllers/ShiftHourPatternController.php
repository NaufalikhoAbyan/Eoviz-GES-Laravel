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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach ($request->shiftPatternForms as $item){
            ShiftHourPattern::create([
                'shift_work_hour_id' => $item['form']['shift_work_hour_id'],
                'is_short_day' => $item['form']['is_short_day'],
                'shift_group_id' => 2,
            ]);
        }

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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShiftHourPattern $shiftHourPattern)
    {
        return redirect(route('shift-hour-patterns.index'))->with(['error' => 'Data cannot be edited,  the data is being used for another record']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShiftHourPattern $shiftHourPattern)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShiftHourPattern $shiftHourPattern)
    {
        return redirect(route('shift-hour-patterns.index'))->with(['error' => 'Data cannot be deleted, the data is being used for another record']);
    }
}
