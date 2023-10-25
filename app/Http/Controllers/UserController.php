<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Http\request;

class UserController extends Controller
{
    public function user ()
    {

        $users=User::get();
        return view('admin.user.index',compact('users'));

    }
}
