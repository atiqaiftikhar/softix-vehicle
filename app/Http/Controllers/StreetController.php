<?php

namespace App\Http\Controllers;

use App\Models\Street;
use Illuminate\Http\Request;

class StreetController extends Controller
{
    public function street()
    {


         $Street=Street::get();
         return view('admin.street.index',compact('Street'));
    }
    public function create ()
    {

        return view('admin.street.create');

    }
    public function edit($id)
    {

     $street=Street::find($id);

      return view('admin.street.create',compact('street'));

    }
    public function store(Request $request)
    {
         $street= new street();

         $street->name=$request->name;
         $street->save();
        return redirect()->back();

    }
    public function update(Request $request,$id)
    {

        $street=Street::find($id);
        $data=$request->all();
        $street->update($data);
        return redirect()->route('street.index');
    }

    public function delete($id)
    {
        $street=Street::find($id);
        $street->delete();
        return redirect()->route('street.index');
    }
}
