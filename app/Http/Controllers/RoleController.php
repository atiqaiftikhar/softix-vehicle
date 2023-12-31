<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function role()
    {
        $Role=Role::get();
     return view('admin.role.index',compact('Role'));

    //Create a variable to get data from database and show it in index
     //$Role is model name & __ object name(table name)

    //  if(Gate::allows('isAdmin'))
    //    {$Role=Role::get();
    //     return view('admin.role.index',compact('Role'));}
    //    else
    //  abort(403,"Invalid");



    }
    public function create ()
    {

        return view('admin.role.index');

    }
    public function edit($id)
    {

     $role=Role::find($id);
     // return $role;
      return view('admin.role.create',compact('role'));

    }
    public function store(Request $request)
    {
         $role= new Role();

         $role->name=$request->name;
         $role->save();
        return redirect()->back();

    }
    public function update(Request $request,$id)
    {
        $role=Role::find($id);
        $data=$request->all();
        $role->update($data);
        return redirect()->route('role.index');
    }
    public function delete($id)
    {
        $role=Role::find($id);

        $role->delete();
        return redirect()->route('role.index');
    }
}
