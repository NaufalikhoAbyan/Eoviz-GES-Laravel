<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supervisors = Supervisor::all();
        return inertia('References/Supervisor/IndexView', [
            'supervisors' => $supervisors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('References/Supervisor/CreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Supervisor::create($request->validate([
            'name' => ['required'],
            'street' => ['required'],
            'country' => ['required'],
            'state' => ['required'],
            'city' => ['required'],
            'postal_code' => ['required', 'integer'],
            'phone' => ['required', 'integer', 'max_digits:12', 'unique:supervisors'],
            'mobile' => ['required', 'integer', 'max_digits:12', 'unique:supervisors'],
            'email' => ['required', 'email', 'unique:supervisors'],
            'status' => ['required'],
            'description' => ['required']
        ]));
        return redirect(route('supervisors.index'))->with(['message' => 'Data successfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Supervisor $supervisor)
    {
        return inertia('References/Supervisor/ShowView', [
            'supervisor' => $supervisor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supervisor $supervisor)
    {
        return inertia('References/Supervisor/EditView', [
            'supervisor' => $supervisor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supervisor $supervisor)
    {
        $supervisor->update($request->validate([
            'name' => ['required'],
            'street' => ['required'],
            'country' => ['required'],
            'state' => ['required'],
            'city' => ['required'],
            'postal_code' => ['required', 'integer'],
            'phone' => ['required', 'integer', 'max_digits:11'],
            'mobile' => ['required', 'integer'],
            'email' => ['required', 'email', Rule::unique('supervisors')->ignore($supervisor->email, 'email')],
            'status' => ['required'],
            'description' => ['required'],
        ]));
        return redirect(route('supervisors.index'))->with(['message' => 'Data successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supervisor $supervisor)
    {
        $supervisor->delete();
        return redirect(route('supervisors.index'))->with(['message' => 'Data successfully deleted!']);
    }
}
