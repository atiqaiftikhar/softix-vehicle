<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {

        return view('navbar.cardetails.index');

    }
    public function sell()
    {

        return view('navbar.carselling.index');

    }
    public function valuation()
    {

        return view('navbar.carvaluation.index');

    }
    public function tips()
    {

        return view('navbar.carselltips.index');

    }
    public function trade()
    {

        return view('navbar.tradein.index');

    }
}
