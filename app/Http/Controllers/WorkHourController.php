<?php

namespace App\Http\Controllers;

use App\Models\WorkHour;
use Illuminate\Http\Request;

class WorkHourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workHours = WorkHour::all();
        return inertia('References/WorkHour/IndexView', [
            'workHours' => $workHours
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('References/WorkHour/CreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        WorkHour::create($request->validate([
            'name' => ['required'],
            'hour' => ['required', 'integer'],
            'holiday' => ['required'],
            'status' => ['required'],
            'description' => ['required'],
            'is_locked' => ['required']
        ]));
        return redirect(route('work-hours.index'))->with(['message' => 'Data successfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkHour $workHour)
    {
        return inertia('References/WorkHour/ShowView', [
            'workHour' => $workHour
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkHour $workHour)
    {
        return inertia('References/WorkHour/EditView', [
            'workHour' => $workHour
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorkHour $workHour)
    {
        $workHour->update($request->validate([
            'name' => ['required'],
            'hour' => ['required'],
            'holiday' => ['required'],
            'status' => ['required'],
            'description' => ['required'],
            'is_locked' => ['required']
        ]));
        return redirect(route('work-hours.index'))->with(['message' => 'Data successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkHour $workHour)
    {
        $workHour->delete();
        return redirect(route('work-hours.index'))->with(['message' => 'Data successfully deleted!']);
    }
}
