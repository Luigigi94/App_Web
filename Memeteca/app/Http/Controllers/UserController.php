<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (request()->has('empty')){
            $users=[];
        }
        else{
            $users=[
              'Mai', 'Jime', 'Newt', 'Frank', 'Luis',
            ];
        }

        $title='Listado de Usuarios Registrados';

        return view('users.index')
            ->with(compact('users','title'));
//            ->with(compact('title',$title));
    }

    public function show($id)
    {
        return view('users.show',compact('id'));
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
