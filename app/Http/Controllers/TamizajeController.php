<?php

namespace App\Http\Controllers;

use App\Models\unidaddesalud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TamizajeController extends Controller
{
    public function index()
    {
        return view('tamizaje.index');
    }

    public function desesperanza()
    {
        return view('tamizaje.desesperanza');
    }
    public function unidades(Request $request)
    {
        $query = unidaddesalud::query();
        
        if($request->has('seleccion')&& $request->seleccion != ''){
            $term=$request->seleccion;
            $query->where(function($query) use ($term){
                $query->where('IdUnidad', "like", "$term");
            } );
        }
        $unidadesdesalud=$query->paginate(6);
        return view('tamizaje.unidadesdesalud', compact('unidadesdesalud'));
    }

    public function save(Request $request)
    {
        // Obtener respuestas del formulario
        $responses = $request->only(['r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9', 'r10', 'r11', 'r12', 'r13', 'r14', 'r15', 'r16', 'r17', 'r18', 'r19', 'r20']);

        // Calcular puntuación
        $puntuacion = 0;
        foreach ($responses as $response) {
            if ($response == "1") {
                $puntuacion += 1;
            }
        }

        // Guardar en la base de datos
        $date = now();
        DB::table('tamizaje')->insert([
            'FechaDesesperanza' => $date,
            'PuntajeDesesperanza' => $puntuacion,
            'user_id' => auth()->user()->id,
            'user_name' => auth()->user()->name,
        ]);

        // Determinar el mensaje según la puntuación
        if ($puntuacion <= 8) {
            $mensaje = "Estimad@ " . auth()->user()->name . ", en relación con el puntaje obtenido en el Tamizaje, te informamos que los resultados corresponden a sin alteraciones que actualmente comprometan a tu salud mental. Te sugerimos sigas cuidando de tu salud mental a través de las recomendaciones que te dejamos en esta página.";
        } elseif ($puntuacion > 8 && $puntuacion < 15) {
            $mensaje = "Estimad@ " . auth()->user()->name . ", en relación con el puntaje obtenido en la escala del Tamizaje, te informamos que los resultados sugieren alguna alteración que actualmente compromete tu salud mental. Te invitamos a visitar tu unidad de salud más cercana a tu domicilio o puedes marcar a la línea de la vida al 800 911 2000 para recibir asesoría.";
        } elseif ($puntuacion >= 15) {
            $mensaje = "Estimad@ " . auth()->user()->name . ", en relación con el puntaje obtenidos en la escala del Tamizaje, te informamos que los resultados sugieren alguna alteración que actualmente compromete tu salud mental. Recibirás la llamada del personal que integra el programa para iniciar con el proceso de atención, en la que se te hará una devolución de tus resultados.";
        }

        // Retornar vista con el mensaje
        return view('tamizaje.resultado')->with('mensaje', $mensaje);
    }
}
