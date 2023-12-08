<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return view('cars.index');
    }
    
    public function details($id){
        $car = Car::find($id);
        return view('cars.details', compact('car'));
    }
}
