<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }
    
    public function details($id){
        $car = Car::find($id);
        return view('cars.details', compact('car'));
    }
}
