<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class CarController extends Controller
{
    public function index(){
        $manufacturers = Manufacturer::all()->pluck('name', 'id')->prepend('All Manufacturers', '');

        if (request('manufacturer_id') == null) {
            $cars = Car::all();
        } else {
            $cars = Car::where('manufacturer_id', request('manufacturer_id'))->get();
        }
        return view('cars.index', compact('cars', 'manufacturers'));
    }
    
    public function details($id){
        $car = Car::find($id);
        return view('cars.details', compact('car'));
    }

    public function savenew(Request $request){
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|exists:manufacturers,id'
        ]);

        Car::create($request->all());
        return redirect()->route('cars.index')->with('successmessage', 'New car has been added.');
    }

    public function saveedit($id, Request $request){
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|exists:manufacturers,id'
        ]);

        $car = Car::find($id);
        $car->update($request->all());

        return redirect()->route('cars.index')->with('success_message', 'Car has been edited.');
    }

    public function create(){
        $car = new Car();
        $manufacturers = Manufacturer::all()->pluck('name', 'id')->prepend('All Manufacturers', '');
        return view('cars.create', compact('manufacturers', 'car'));
    }

    public function edit($id){
        $car = Car::find($id);
        $manufacturers = Manufacturer::all()->pluck('name', 'id')->prepend('All Manufacturers', '');
        
        return view('cars.edit', compact('manufacturers', 'car'));
    }

    public function remove($id){
        $car = Car::find($id);
        $car->delete();
        return redirect()->route('cars.index')->with('success_message', 'Car has been deleted.');
    }
}
