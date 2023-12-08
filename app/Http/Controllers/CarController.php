<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        $manufacturers = Manufacturer::all()->pluck('name', 'id');
        return view('cars.index', compact('cars', 'manufacturers'));
    }
    
    public function details($id){
        $car = Car::find($id);
        return view('cars.details', compact('car'));
    }
}
