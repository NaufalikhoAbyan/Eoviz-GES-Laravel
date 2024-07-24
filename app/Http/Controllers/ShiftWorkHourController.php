<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShiftWorkHour;
use Illuminate\Validation\Rule;

class ShiftWorkHourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shiftWorkHours = ShiftWorkHour::all();
        return inertia('References/ShiftWorkHour/IndexView', [
            'shiftWorkHours' => $shiftWorkHours
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('References/ShiftWorkHour/CreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ShiftWorkHour::create($request->validate([
            'code' => ['required', 'unique:shift_work_hours'],
            'name' => ['required'],
            'begin_log' => ['required'],
            'end_log' => ['required'],
            'start' => ['required'],
            'end' => ['required'],
            'start_tolerance' => ['required'],
            'end_tolerance' => ['required'],
            'break_start' => ['required'],
            'break_end' => ['required'],
            'cross_day' => ['required'],
            'overtime_type' => ['required'],
            'automatic_overtime' => ['required_if:overtime_type,Automatic'],
            'status' => ['required'],
            'description' => ['required']
        ]));
        return redirect(route('shift-work-hours.index'))->with(['message' => 'Data successfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(ShiftWorkHour $shiftWorkHour)
    {
        return inertia('References/ShiftWorkHour/ShowView', [
            'shiftWorkHour' => $shiftWorkHour
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShiftWorkHour $shiftWorkHour)
    {
        return inertia('References/ShiftWorkHour/EditView', [
            'shiftWorkHour' => $shiftWorkHour
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShiftWorkHour $shiftWorkHour)
    {
        $shiftWorkHour->update($request->validate([
            'code' => ['required',  Rule::unique('shift_work_hours')->ignore($shiftWorkHour->code, 'code')],
            'name' => ['required'],
            'begin_log' => ['required'],
            'end_log' => ['required'],
            'start' => ['required'],
            'end' => ['required'],
            'start_tolerance' => ['required'],
            'end_tolerance' => ['required'],
            'break_start' => ['required'],
            'break_end' => ['required'],
            'cross_day' => ['required'],
            'overtime_type' => ['required'],
            'automatic_overtime' => ['required_if:overtime_type,Automatic'],
            'status' => ['required'],
            'description' => ['required']
        ]));
        return redirect(route('shift-work-hours.index'))->with(['message' => 'Data successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShiftWorkHour $shiftWorkHour)
    {
        try {
            $shiftWorkHour->delete();
        } catch (\Exception $exception) {
            return redirect(route('shift-work-hours.index'))->with(['error' => 'Data cannot be deleted, the data is being used for another record']);
        }
        return redirect(route('shift-work-hours.index'))->with(['message' => 'Data successfully deleted!']);
    }
}
