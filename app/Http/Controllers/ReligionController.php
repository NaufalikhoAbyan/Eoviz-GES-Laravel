<?php

namespace App\Http\Controllers;

use App\Models\Religion;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReligionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $religions = Religion::all();
        return inertia('References/Religion/IndexView',[
            'religions' => $religions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('References/Religion/CreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Religion::create($request->validate([
            'name' => ['required', 'unique:religions'],
            'status' => ['required'],
            'description' => ['required'],
        ]));
        return redirect(route('religions.index'))->with(['message' => 'Data successfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Religion $religion)
    {
        return inertia('References/Religion/ShowView',[
            'religion' => $religion
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Religion $religion)
    {
        return inertia('References/Religion/EditView',[
            'religion' => $religion
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Religion $religion)
    {
        $religion->update($request->validate([
            'name' => ['required', Rule::unique('religions')->ignore($religion->name, 'name')],
            'status' => ['required'],
            'description' => ['required']
        ]));
        return redirect(route('religions.index'))->with(['message' => 'Data successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Religion $religion)
    {
        $religion->delete();
        return redirect(route('religions.index'))->with(['message' => 'Data successfully deleted!']);
    }
}
