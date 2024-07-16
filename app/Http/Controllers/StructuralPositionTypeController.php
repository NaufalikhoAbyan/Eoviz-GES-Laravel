<?php

namespace App\Http\Controllers;

use App\Models\StructuralPositionType;
use Illuminate\Http\Request;

class StructuralPositionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('References/StructuralPositionType/IndexView', [
            'structuralPositionTypes' => StructuralPositionType::all()->load('parent')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('References/StructuralPositionType/CreateView', [
            'structuralPositionTypes' => StructuralPositionType::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        StructuralPositionType::create($request->validate([
            'structural_position_type_id' => ['nullable'],
            'code' => ['required'],
            'name' => ['required'],
            'order' => ['required', 'unique:structural_position_types'],
            'status' => ['required'],
            'description' => ['required']
        ]));

        return redirect(route('structural-position-types.index'))->with(['message' => 'Data successfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(StructuralPositionType $structuralPositionType)
    {
        return inertia('References/StructuralPositionType/ShowView', [
            'structuralPositionType' => $structuralPositionType->load('parent')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StructuralPositionType $structuralPositionType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StructuralPositionType $structuralPositionType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StructuralPositionType $structuralPositionType)
    {
        //
    }
}
