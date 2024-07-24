<?php

namespace App\Http\Controllers;

use App\Models\MaritalCodeTax;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'code' => ['required', 'integer', 'unique:marital_code_taxes'],
            'name' => ['required'],
            'order' => ['required', 'integer', 'unique:marital_code_taxes'],
            'description' => ['required']
        ]));
        return redirect(route('marital-code-taxes.index'))->with(['message' => 'Data successfully added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(MaritalCodeTax $maritalCodeTax)
    {
        return inertia('References/MaritalCodeTax/ShowView', [
            'maritalCodeTax' => $maritalCodeTax
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaritalCodeTax $maritalCodeTax)
    {
        return inertia('References/MaritalCodeTax/EditView', [
            'maritalCodeTax' => $maritalCodeTax
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaritalCodeTax $maritalCodeTax)
    {
        $maritalCodeTax->update($request->validate([
            'code' => ['required', 'integer', Rule::unique('marital_code_taxes')->ignore($maritalCodeTax->code, 'code')],
            'name' => ['required'],
            'order' => ['required', 'integer', Rule::unique('marital_code_taxes')->ignore($maritalCodeTax->order, 'order')],
            'description' => ['required']
        ]));
        return redirect(route('marital-code-taxes.index'))->with(['message' => 'Data successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaritalCodeTax $maritalCodeTax)
    {
        try {
            $maritalCodeTax->delete();
        } catch (\Exception $exception) {
            return redirect(route('marital-code-taxes.index'))->with(['error' => 'Data cannot be deleted, the data is being used for another record']);
        }
        return redirect(route('marital-code-taxes.index'))->with(['message' => 'Data successfully deleted!']);
    }
}
