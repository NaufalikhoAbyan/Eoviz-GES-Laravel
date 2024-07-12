<?php

namespace App\Http\Controllers;

use App\Models\GradeType;
use Illuminate\Http\Request;

class GradeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gradeTypes = GradeType::all();
        return inertia('References/GradeTypes/IndexView', [
            'gradeTypes' => $gradeTypes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('References/GradeTypes/CreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        GradeType::create($request->validate([
            'level' => ['required', 'integer', 'unique:grade_types'],
            'code' => ['required', 'integer', 'unique:grade_types'],
            'name' => ['required'],
            'order' => ['required', 'integer', 'unique:grade_types'],
            'status' => ['required'],
            'description' => ['required']
        ]));
        return redirect()->route('grade-types.index')->with(['message' => 'Data succesfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(GradeType $gradeType)
    {
        return inertia('References/GradeTypes/ShowView', [
            'gradeType' => $gradeType
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GradeType $gradeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GradeType $gradeType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GradeType $gradeType)
    {
        //
    }
}
