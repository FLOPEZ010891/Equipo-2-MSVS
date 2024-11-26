<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UsuariosController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        
        if ($request->has('buscar') && $request->buscar != '') {
            $term = $request->buscar;
            $query->where(function ($query) use ($term) {
                $query->where('name', 'like', "%$term%")
                      ->orWhere('email', 'like', "%$term%");
            });
        }

        $usuarios = $query->paginate(10);

        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'direccion' => 'required',
            'edad' => 'required|integer',
            'sexo' => 'required|in:Hombre,Mujer,No binario',
            'ocupacion' => 'nullable',
            'telefono' => 'required',
            'password' => 'required|min:6|confirmed',
            'imagen' => 'required|image',
        ]);

        $imagenPath = $request->file('imagen')->store('public/imagenes');
        $imagenUrl = Storage::url($imagenPath);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->direccion = $request->input('direccion');
        $user->edad = $request->input('edad');
        $user->sexo = $request->input('sexo');
        $user->ocupacion = $request->input('ocupacion');
        $user->telefono = $request->input('telefono');
        $user->password = Hash::make($request->input('password'));
        $user->imagen = $imagenUrl;

        $user->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, User $usuario)

{
    $request->validate([
        'name' => 'required',
        'email' => [
            'required',
            'email',
            Rule::unique('users')->ignore($usuario->id),
        ],
        'direccion' => 'required',
        'edad' => 'required|integer',
        'sexo' => 'required|in:Hombre,Mujer,No binario',
        'ocupacion' => 'nullable',
        'telefono' => 'required',
        'imagen' => 'nullable|image',
    ]);

    $data = $request->all();

    if ($request->hasFile('imagen')) {
        $imagenPath = $request->file('imagen')->store('public/imagenes');
        $data['imagen'] = Storage::url($imagenPath);
    } else {
        unset($data['imagen']);
    }

    $usuario->fill($data);
    $usuario->save();

    return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
}

    public function destroy(User $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }
}

