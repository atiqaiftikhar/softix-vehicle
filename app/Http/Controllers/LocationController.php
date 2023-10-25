<?php

namespace App\Http\Controllers;

use App\Models\Location;

use Illuminate\Http\Request;

  class LocationController extends Controller
  {
    public function loc()
    {
        $Location=Location::get();
        return view('admin.location.index',compact('Location'));

    }
    public function create ()
    {

    return view('admin.location.create');

    }
    public function edit($id)
    {

    $location=Location::find($id);
    // return $location;
    return view('admin.location.create',compact('location'));

    }
    public function store(Request $request)
    {
     $location= new location();

     $location->name=$request->name;
     $location->save();
     return redirect()->back();

    }
    public function update(Request $request,$id)
    {
    //$id=$request->$id;
    $location=Location::find($id);
    $data=$request->all();
    $location->update($data);
    return redirect()->route('location.index');
    }

    public function delete($id)
    {
    $location=Location::find($id);

    $location->delete();
    return redirect()->route('location.index');
    }

    }
