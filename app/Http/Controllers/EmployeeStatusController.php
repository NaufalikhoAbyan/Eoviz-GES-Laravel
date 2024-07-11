<?php

namespace App\Http\Controllers;

use App\Models\EmployeeStatus;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employeeStatuses = EmployeeStatus::all();
        return inertia('References/EmployeeStatus/IndexView', [
            'employeeStatuses' => $employeeStatuses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('References/EmployeeStatus/CreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        EmployeeStatus::create($request->validate([
            'name' => ['required'],
            'is_active' => ['required'],
            'order' => ['required', 'integer', 'unique:employee_statuses'],
            'status' => ['required'],
            'description' => ['required']
        ]));
        return redirect(route('employee-statuses.index'))->with(['message' => 'Data successfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeStatus $employeeStatus)
    {
        return inertia('References/EmployeeStatus/ShowView', [
            'employeeStatus' => $employeeStatus
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeStatus $employeeStatus)
    {
        return inertia('References/EmployeeStatus/EditView', [
            'employeeStatus' => $employeeStatus
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeStatus $employeeStatus)
    {
        $employeeStatus->update($request->validate([
            'name' => ['required'],
            'is_active' => ['required'],
            'order' => ['required', 'integer', Rule::unique('employee_statuses')->ignore($employeeStatus->order, 'order')],
            'status' => ['required'],
            'description' => ['required']
        ]));
        return redirect(route('employee-statuses.index'))->with(['message' => 'Data successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeStatus $employeeStatus)
    {
        //
    }
}
