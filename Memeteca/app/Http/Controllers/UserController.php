<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
//       $users = DB::table('users')->get(); Así se cargan los datos con consulta de Facades\DB
        $users = User::all();

//       dd($users);

        $title='Listado de Usuarios Registrados';

        return view('users.index')
            ->with(compact('users','title'));
    }

    public function show($id)
    {
        $user = User::find($id);

//        dd($user);

        return view('users.show',compact('user'));
    }
}
