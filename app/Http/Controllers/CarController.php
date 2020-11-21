<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function show() 
    {
        $honda = new Car();
        $honda->setModelNum(10);
        dd($honda->getModelNum());
        return view('views.cars');
    }
}
