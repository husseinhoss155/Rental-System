<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function newcar(Request $request)
    {
        $car = new Car ;
        $car->model=$request->model ;
        $car->year=$request->year;
        $car->plate_id=$request->plate_id;
        $car->color=$request->color;
        $car->price=$request->price;
        $car->status=$request->status;
        $car->save();
        return redirect()->route('welcome'); // refersh the page
    }
}
