<?php

namespace App\Http\Controllers;

use App\Models\MaritalCodeTax;
use Illuminate\Http\Request;

class MaritalCodeTaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maritalCodeTaxes = MaritalCodeTax::all();
        return inertia('References/MaritalCodeTax/IndexView', [
            'maritalCodeTaxes' => $maritalCodeTaxes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('References/MaritalCodeTax/CreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MaritalCodeTax::create($request->validate([
            'code' => ['required', 'unique:marital_code_taxes'],
            'name' => ['required'],
            'order' => ['required', 'integer'],
            'description' => ['required']
        ]));
        return redirect(route('marital-code-taxes.index'))->with(['message' => 'Data successfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(MaritalCodeTax $maritalCodeTax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaritalCodeTax $maritalCodeTax)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaritalCodeTax $maritalCodeTax)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaritalCodeTax $maritalCodeTax)
    {
        //
    }
}
