<?php

namespace App\Http\Controllers;

use App\Models\ShiftGroup;
use App\Models\ShiftHourPattern;
use App\Models\ShiftWorkHour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShiftGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shiftGroups = ShiftGroup::all();
        return inertia('References/ShiftGroup/IndexView', [
            'shiftGroups' => $shiftGroups
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('References/ShiftGroup/CreateView', [
            'shiftWorkHours' => ShiftWorkHour::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach ($request['shift_group_patterns'] as $shift_group_pattern) {
            $validator = Validator::make($shift_group_pattern['form'], [
                'shift_work_hour_id' => ['required']
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors("All Shift Hour dropdown must be filled!");
            }
        }

        $newShiftGroup = ShiftGroup::create($request->validate([
            'code' => ['required', 'unique:shift_groups'],
            'name' => ['required'],
            'order' => ['required', 'unique:shift_groups'],
            'status' => ['required'],
            'is_follow_holiday' => ['required'],
            'description' => ['required'],
        ]));

        if($newShiftGroup) {
            foreach ($request['shift_group_patterns'] as $shift_group_pattern) {
                ShiftHourPattern::create([
                    'shift_work_hour_id' => $shift_group_pattern['form']['shift_work_hour_id'],
                    'is_short_day' => $shift_group_pattern['form']['is_short_day'],
                    'shift_group_id' => $newShiftGroup['id'],
                ]);
            }
        }

        return redirect(route('shift-groups.index'))->with(['message' => 'Shift Group created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(ShiftGroup $shiftGroup)
    {
        $shiftWorkHours = [];
        foreach ($shiftGroup->shiftHourPatterns as $shiftWorkPattern) {
            $shiftWorkHour =  ShiftWorkHour::findOrFail($shiftWorkPattern->shift_work_hour_id);
            $shiftWorkHours[] = [
                'is_short_day' => $shiftWorkPattern->is_short_day,
                'name' => $shiftWorkHour->name,
                'start' => $shiftWorkHour->start,
                'end' => $shiftWorkHour->end,
            ];
        }
        return inertia('References/ShiftGroup/ShowView', [
            'shiftGroup' => $shiftGroup->load('shiftHourPatterns'),
            'shiftWorkHours' => $shiftWorkHours
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShiftGroup $shiftGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShiftGroup $shiftGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShiftGroup $shiftGroup)
    {
        //
    }
}
