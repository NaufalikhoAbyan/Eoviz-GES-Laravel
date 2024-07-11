<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'name' => ['required', 'unique:blood_types'],
            'status' => ['required'],
            'description' => ['required'],
        ]));
        return redirect(route('blood-types.index'))->with(['message' => 'Data successfully added!']);
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
    public function edit(BloodType $bloodType)
    {
        return inertia('References/BloodType/EditView',[
            'bloodType' => $bloodType,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BloodType $bloodType)
    {
        $bloodType->update($request->validate([
            'name' => ['required', Rule::unique('blood_types')->ignore($bloodType->name, 'name')],
            'status' => ['required'],
            'description' => ['required']
        ]));
        return redirect(route('blood-types.index'))->with(['message' => 'Data successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BloodType $bloodType)
    {
        $bloodType->delete();
        return redirect(route('blood-types.index'))->with(['message' => 'Data successfully deleted!']);
    }
}
