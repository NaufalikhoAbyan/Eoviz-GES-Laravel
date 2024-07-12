<?php

namespace App\Http\Controllers;

use App\Models\MaritalStatus;
use Illuminate\Http\Request;

class MaritalStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maritalStatuses = MaritalStatus::all();
        return inertia('References/MaritalStatus/IndexView', [
            'maritalStatuses' => $maritalStatuses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('References/MaritalStatus/CreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MaritalStatus::create($request->validate([
            'name' => ['required'],
            'is_married' => ['required'],
            'status' => ['required'],
            'description' => ['required']
        ]));
        return redirect(route('marital-statuses.index'))->with(['message' => 'Data successfully added']);
    }

    /**
     * Display the specified resource.
     */
    public function show(MaritalStatus $maritalStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaritalStatus $maritalStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaritalStatus $maritalStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaritalStatus $maritalStatus)
    {
        //
    }
}
