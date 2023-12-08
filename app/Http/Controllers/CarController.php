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

    public function save(Request $request){
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|exists:manufacturers,id'
        ]);
    }

    public function create(){
        $manufacturers = Manufacturer::all()->pluck('name', 'id')->prepend('All Manufacturers', '');
        return view('cars.create', compact('manufacturers'));
    }
}
