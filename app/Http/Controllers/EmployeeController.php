<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Models\Employee;
use App\Models\EmployeeStatus;
use App\Models\EmployeeType;
use App\Models\FunctionalPositionType;
use App\Models\GradeType;
use App\Models\MaritalCode;
use App\Models\MaritalCodeTax;
use App\Models\MaritalStatus;
use App\Models\Religion;
use App\Models\ShiftGroup;
use App\Models\ShiftWorkHour;
use App\Models\StructuralPositionType;
use App\Models\Supervisor;
use App\Models\WorkHour;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Employee/IndexView', [
            'employees' => Employee::all()->load('employeeType', 'employeeStatus', 'structuralPositionType')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Employee/CreateView', [
            "bloodTypes" => BloodType::all(),
            "religions" => Religion::all(),
            "workHours" => WorkHour::all(),
            "employeeTypes" => EmployeeType::all(),
            "employeeStatuses" => EmployeeStatus::all(),
            "structuralPositions" => StructuralPositionType::all(),
            "functionalPositions" => FunctionalPositionType::all(),
            "gradeTypes" => GradeType::all(),
            "maritalStatuses" => MaritalStatus::all()->load('maritalCodes'),
            "maritalCodeTaxes" => MaritalCodeTax::all(),
            "shiftGroups" => ShiftGroup::all()->load('shiftHourPatterns'),
            "shiftWorkHours" => ShiftWorkHour::all(),
            "supervisors" => Supervisor::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Employee::create($request->validate([
            'fullname' => ['required'],
            'personal_id' => ['required'],
            'presence_number' => ['required', 'integer', 'unique:employees'],
            'place_of_birth' => ['required'],
            'date_of_birth' => ['required'],
            'gender' => ['required'],
            'blood_type_id' => ['required'],
            'religion_id' => ['required'],
            'nationality' => ['required'],
            'join_date' => ['required'],
            'work_hour_id' => ['required'],
            'employee_type_id' => ['required'],
            'effective_type_start_date' => ['required'],
            'effective_type_end_date' => ['required'],
            'employee_status_id' => ['required'],
            'effective_status_start_date' => ['required'],
            'effective_status_end_date' => ['required'],
            'structural_position_type_id' => ['required'],
            'effective_structural_pos_start_date' => ['required'],
            'effective_structural_pos_end_date' => ['required'],
            'functional_position_type_id' => ['required'],
            'effective_functional_pos_start_date' => ['required'],
            'effective_functional_pos_end_date' => ['required'],
            'grade_type_id' => ['required'],
            'effective_grade_start_date' => ['required'],
            'effective_grade_end_date' => ['required'],
            'marital_status_id' => ['required'],
            'marital_code_id' => ['required'],
            'marital_code_tax_id' => ['required'],
            'effective_marital_start_date' => ['required'],
            'effective_marital_end_date' => ['required'],
            'shift_group_id' => ['required'],
            'shift_work_hour_id' => ['required'],
            'effective_group_shift_start_date' => ['required'],
            'effective_group_shift_end_date' => ['required'],
            'supervisor_id' => ['required'],
            'effective_supervisor_start_date' => ['required'],
            'effective_supervisor_end_date' => ['required'],
        ]));
        return redirect(route('employees.index'))->with(['message' => 'Data successfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return inertia('Employee/ShowView', [
            'employee' => $employee->load('bloodType', 'religion')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
