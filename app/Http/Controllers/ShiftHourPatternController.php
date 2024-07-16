<?php

namespace App\Http\Controllers;

use App\Models\ShiftHourPattern;
use Illuminate\Http\Request;

class ShiftHourPatternController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shiftHourPatterns = ShiftHourPattern::all();
        return inertia('References/ShiftHourPattern/IndexView', [
            'shiftHourPatterns' => $shiftHourPatterns
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ShiftHourPattern $shiftHourPattern)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShiftHourPattern $shiftHourPattern)
    {
        //
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
        //
    }
}
