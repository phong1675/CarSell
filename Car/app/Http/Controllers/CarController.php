<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $search = $request->input('search');

        $cars = Car::query();

        if ($search) {
            $cars = $cars->where('carName', 'like', "%{$search}%")
                       ->orWhere('carBrand', 'like', "%{$search}%");
    }
        $cars = $cars->get();

        return view('cars.index', compact('cars', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'carName' => 'required|max:255',
            'carBrand' => 'required|max:255',
            'price' => 'nullable|numeric|min:0',
            'carType' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        Car::create($validated);

        return redirect()->route('cars.index')->with('success', 'Car created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $car = Car::findOrFail($id);
    return view('cars.show', compact('car'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'carName' => 'required|max:255',
            'carBrand' => 'required|max:255',
            'price' => 'nullable|numeric|min:0',
            'carType' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $car->update($validated);

        return redirect()->route('cars.index')->with('success', 'Car updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted!');
    }
}