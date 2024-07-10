<?php

namespace App\Http\Controllers;

use App\Models\EmployeeType;
use Illuminate\Http\Request;

class EmployeeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employeeTypes = EmployeeType::all();
        return inertia('References/EmployeeType/IndexView', [
            'employeeTypes' => $employeeTypes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('References/EmployeeType/CreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        EmployeeType::create($request->validate([
            'name' => ['required'],
            'is_permanent' => ['required'],
            'order' => ['required', 'integer', 'unique:employee_types'],
            'status' => ['required'],
            'description' => ['required']
        ]));
        return redirect(route('employee-types.index'))->with(['message' => 'Data successfuly added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeType $employeeType)
    {
        return inertia('References/EmployeeType/ShowView', [
            'employeeType' => $employeeType
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeType $employeeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeType $employeeType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeType $employeeType)
    {
        //
    }
}
