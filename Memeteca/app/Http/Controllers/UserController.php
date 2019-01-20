<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        $title='Listado de Usuarios Registrados';

        return view('users.index')
            ->with(compact('users','title'));
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'Nombre_Real' => 'required',
            'Apellido_Paterno' => 'required',
            'Apellido_Materno' => 'required',
            'Edad' => 'required',
            'sex_id' => 'required',
        ],[
            'name' => 'El campo nickname es requiredo',
            'email' => 'El campo email es requiredo',
            'password' => 'El campo password es requiredo',
            'Nombre_Real' => 'El campo Nombre es requiredo',
            'Apellido_Paterno' => 'El campo Apellido Paterno es requiredo',
            'Apellido_Materno' => 'El campo Apellido Materno es requiredo',
            'Edad' => 'El campo Edad es requiredo',
            'sex_id' => 'El campo Sexo es requiredo',
        ]);
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'Nombre_Real' => $data['Nombre_Real'],
            'Apellido_Paterno' => $data['Apellido_Paterno'],
            'Apellido_Materno' => $data['Apellido_Materno'],
            'Edad' => $data['Edad'],
            'sex_id' => $data['sex_id'],
        ]);
//        dd($data);
        return redirect('usuarios');
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit($id)
    {
        $users= User::find($id);

        return $users;
    }

    public function update(User $user)
    {
        $data=request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => '',
            'Nombre_Real' => 'required',
            'Apellido_Paterno' => 'required',
            'Apellido_Materno' => 'required',
            'Edad' => 'required',
            'sex_id' => 'required',
        ],[
            'name' => 'El campo nickname es requiredo',
            'email' => 'El campo email es requiredo',

            'Nombre_Real' => 'El campo Nombre es requiredo',
            'Apellido_Paterno' => 'El campo Apellido Paterno es requiredo',
            'Apellido_Materno' => 'El campo Apellido Materno es requiredo',
            'Edad' => 'El campo Edad es requiredo',
            'sex_id' => 'El campo Sexo es requiredo',
        ]);

        if ($data['password']!= null & strlen($data['password'])>=8){
            $data['password'] = bcrypt($data['password']);
        }
        elseif ($data['password']!= null & strlen($data['password'])<8){
            echo 'la contraseña debe ser minimo 8 caracteres';
        }else{
            unset($data['password']);
        }

        return redirect()->route('users.show',['user' => $user]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

    public function alluser()
    {
        $users= User::all();
        return Datatables::of($users)
            ->addColumn('Action',function ($users){
                '<a onclick="'.$users->id.'" class="btn btn-xs btn-primary">Edit</a>';
            })
            ->make(true)
        ;
    }
}
