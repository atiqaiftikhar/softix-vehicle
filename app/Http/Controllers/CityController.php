<?php

namespace App\Http\Controllers;

use App\Models\City;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function city()
    {


     $City=City::get();
     return view('admin.city.index',compact('City'));


    }
    public function create ()
    {

        return view('admin.city.create');

    }
    public function edit($id)
    {

     $city=City::find($id);

         return view('admin.city.index',compact('city'));

    }
    public function store(Request $request)
    {
         $city= new city();

         $city->name=$request->name;
         $city->save();
        return redirect()->back();

    }
    public function update(Request $request,$id)
    {
        $city=City::find($id);
        $data=$request->all();
        $city->update($data);
        return redirect()->route('city.index');
    }

    public function delete($id)
    {
        $city=City::find($id);
        $city->delete();
        return redirect()->route('city.index');
    }
}
