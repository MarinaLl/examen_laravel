<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        
        // Crea un nuevo usuario
        $user = new User();
        $user->name = $request->nick;
        $user->password = bcrypt($request->password);
        // Otros campos si es necesario
        $user->save();

        // Redirige al usuario a la página de visualización del usuario recién creado
        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Valida los datos del formulario
        
        // Actualiza los datos del usuario
        $user->name = $request->name;
        $user->email = $request->email;
        // Otros campos si es necesario
        $user->save();

        // Redirige al usuario a la página de visualización del usuario actualizado
        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente.');
    }
}
