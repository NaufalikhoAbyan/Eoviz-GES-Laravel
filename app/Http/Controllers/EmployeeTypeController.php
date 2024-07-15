<?php

namespace App\Http\Controllers;

use App\Models\EmployeeType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employeeTypes = EmployeeType::all();
        return inertia('References/EmployeeType/IndexView', [
            'employeeTypes' => $employeeTypes
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
        return redirect(route('employee-types.index'))->with(['message' => 'Data successfully added!']);
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
        return inertia('References/EmployeeType/EditView', [
            'employeeType' => $employeeType
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeType $employeeType)
    {
        $employeeType->update($request->validate([
            'name' => ['required'],
            'is_permanent' => ['required'],
            'order' => ['required', 'integer', Rule::unique('employee_types')->ignore($employeeType->order, 'order')],
            'status' => ['required'],
            'description' => ['required']
        ]));
        return redirect(route('employee-types.index'))->with(['message' => 'Data successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeType $employeeType)
    {
        $employeeType->delete();
        return redirect(route('employee-types.index'))->with(['message' => 'Data successfully deleted!']);
    }
}
