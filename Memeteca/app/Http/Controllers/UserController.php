<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users= DB::table('users')->get();

        return view('users.index')
            ->with(compact('users','title'));
//            ->with(compact('title',$title));
    }

    public function show($id)
    {
        return view('users.show',compact('id'));
    }
}
