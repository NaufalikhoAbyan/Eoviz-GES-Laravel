<?php

namespace App\Http\Controllers;

use App\Models\FunctionalPositionType;
use Illuminate\Http\Request;

class FunctionalPositionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia("References/FunctionalPositionType/IndexView", [
            "functionalPositionTypes" => FunctionalPositionType::all()->load('parent')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia("References/FunctionalPositionType/CreateView", [
            "functionalPositionTypes" => FunctionalPositionType::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FunctionalPositionType::create($request->validate([
            'functional_position_type_id' => ['nullable'],
            'code' => ['required'],
            'name' => ['required'],
            'order' => ['required', 'unique:functional_position_types'],
            'status' => ['required'],
            'description' => ['required']
        ]));

        return redirect(route('functional-position-types.index'))->with(['message' => 'Data successfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(FunctionalPositionType $functionalPositionType)
    {
        return inertia('References/FunctionalPositionType/ShowView', [
            'functionalPositionType' => $functionalPositionType->load('parent')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FunctionalPositionType $functionalPositionType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FunctionalPositionType $functionalPositionType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FunctionalPositionType $functionalPositionType)
    {
        //
    }
}
