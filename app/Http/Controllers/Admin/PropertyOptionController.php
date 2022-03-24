<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyOptionRequest;
use App\Models\Property;
use App\Models\PropertyOption;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PropertyOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Property $property
     * @return Factory|Application|View
     */
    public function index(Property $property)
    {
        $properties = Property::get();
        $propertyOptions = PropertyOption::where('property_id', $property->id)->paginate(10);
        return view('auth.property_options.index', compact('propertyOptions', 'property'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Property $property
     * @return Application|Factory|View
     */
    public function create(Property $property)
    {
        return view('auth.property_options.form', compact('property'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PropertyOptionRequest $request
     * @param Property $property
     * @return RedirectResponse
     */
    public function store(PropertyOptionRequest $request, Property $property)
    {
        $params = $request->all();
        $params['property_id'] = $request->property->id;

        PropertyOption::create($params);

        return redirect()->route('property-options.index', $property);
    }

    /**
     * Display the specified resource.
     *
     * @param Property $property
     * @param PropertyOption $propertyOption
     * @return Application|Factory|View
     */
    public function show(Property $property, PropertyOption $propertyOption)
    {
        return view('auth.property_options.show', compact('propertyOption'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param PropertyOption $propertyOption
     * @param Property $property
     * @return Application|Factory|View
     */
    public function edit(Property $property, PropertyOption $propertyOption)
    {
        return view('auth.property_options.form', compact('propertyOption', 'property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PropertyOptionRequest $request
     * @param Property $property
     * @param PropertyOption $propertyOption
     * @return RedirectResponse
     */
    public function update(PropertyOptionRequest $request, Property $property, PropertyOption $propertyOption)
    {
        $params = $request->all();
        $propertyOption->update($params);

        return redirect()->route('property-options.index', $property);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Property $property
     * @param PropertyOption $propertyOption
     * @return RedirectResponse
     */
    public function destroy(Property $property, PropertyOption $propertyOption)
    {
        $propertyOption->delete();

        return redirect()->route('property-options.index', $property);
    }
}
