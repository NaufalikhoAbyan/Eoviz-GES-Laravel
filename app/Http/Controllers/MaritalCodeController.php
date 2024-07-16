<?php

namespace App\Http\Controllers;

use App\Models\MaritalCode;
use App\Models\MaritalStatus;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        return inertia('References/MaritalCode/CreateView', [
            'maritalStatuses' => MaritalStatus::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MaritalCode::create($request->validate([
            'code' => ['required', 'unique:marital_codes'],
            'name' => ['required'],
            'status' => ['required'],
            'description' => ['required'],
            'marital_status_id' => ['required']
        ]));

        return redirect(route('marital-codes.index'))->with(['message' => 'Data successfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(MaritalCode $maritalCode)
    {
        return inertia('References/MaritalCode/ShowView', [
            'maritalCode' => $maritalCode->load('maritalStatus')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaritalCode $maritalCode)
    {
        return inertia('References/MaritalCode/EditView', [
            'maritalCode' => $maritalCode,
            'maritalStatuses' => MaritalStatus::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaritalCode $maritalCode)
    {
        $maritalCode->update($request->validate([
            'code' => ['required', Rule::unique('marital_codes')->ignore($maritalCode->code, 'code')],
            'name' => ['required'],
            'status' => ['required'],
            'description' => ['required'],
            'marital_status_id' => ['required']
        ]));

        return redirect(route('marital-codes.index'))->with(['message' => 'Data successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaritalCode $maritalCode)
    {
        $maritalCode->delete();
        return redirect(route('marital-codes.index'))->with(['message' => 'Data successfully deleted!']);
    }
}
