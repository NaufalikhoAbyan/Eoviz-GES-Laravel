<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;

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
            'postal_code' => ['required'],
            'phone' => ['required'],
            'mobile' => ['required'],
            'email' => ['required'],
            'status' => ['required'],
            'description' => ['required'],
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supervisor $supervisor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supervisor $supervisor)
    {
        //
    }
}
