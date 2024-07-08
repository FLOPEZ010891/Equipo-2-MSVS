<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistroController extends Controller
{
    public function showForm()
    {
        return view('registro');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'nombreCompleto' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'edad' => 'required|integer|min:13',
            'sexo' => 'required|string',
            'ocupacion' => 'nullable|string|max:255',
            'telefono' => 'required|string|max:10',
            'correo' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'imagen' => 'required|image|max:2048',
        ]);

        $path = $request->file('imagen')->store('public/images');
        $filename = basename($path);

        $user = new User();
        $user->name = $request->nombreCompleto; 
        $user->direccion = $request->direccion;
        $user->edad = $request->edad;
        $user->sexo = $request->sexo;
        $user->ocupacion = $request->ocupacion;
        $user->telefono = $request->telefono;
        $user->email = $request->correo;
        $user->password = Hash::make($request->password);
        $user->imagen = $filename;
        $user->save();

        return redirect()->route('registro.show')->with('success', 'Registro exitoso.');
    }
}
