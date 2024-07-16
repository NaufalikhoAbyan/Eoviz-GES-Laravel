<?php

namespace App\Http\Controllers;

use App\Models\ShiftWorkHour;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ShiftWorkHour $shiftWorkHour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShiftWorkHour $shiftWorkHour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShiftWorkHour $shiftWorkHour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShiftWorkHour $shiftWorkHour)
    {
        //
    }
}
