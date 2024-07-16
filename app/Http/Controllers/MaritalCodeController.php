<?php

namespace App\Http\Controllers;

use App\Models\MaritalCode;
use Illuminate\Http\Request;

class MaritalCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('References/MaritalCode/IndexView', [
            'maritalCodes' => MaritalCode::all()->load('maritalStatus')
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
    public function show(MaritalCode $maritalCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaritalCode $maritalCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaritalCode $maritalCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaritalCode $maritalCode)
    {
        //
    }
}
