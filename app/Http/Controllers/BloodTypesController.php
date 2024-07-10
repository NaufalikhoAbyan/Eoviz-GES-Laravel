<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use Illuminate\Http\Request;

class BloodTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bloodTypes = BloodType::all();
        return inertia('References/BloodType/IndexView',[
            'bloodTypes' => $bloodTypes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('References/BloodType/CreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BloodType::create($request->validate([
            'name' => ['required','unique:blood_types'],
            'status' => ['required'],
            'description' => ['required'],

        ]));
        return redirect(route('blood-types.index'))->with(['message' => 'Data sucessfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(BloodType $bloodType)
    {
        return inertia('References/BloodType/ShowView',[
            'bloodType' => $bloodType,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
