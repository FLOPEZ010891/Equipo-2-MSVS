<?php

namespace App\Http\Controllers;

use App\Models\unidaddesalud;
use Illuminate\Http\Request;

class UnidaddesaludController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = unidaddesalud::query();
        
        if($request->has('seleccion')&& $request->seleccion != ''){
            $term=$request->seleccion;
            $query->where(function($query) use ($term){
                $query->where('IdUnidad',"==", "$term");
            } );
        }
        $unidadesdesalud=$query->paginate(1);

        return view('tamizaje.unidadesdesalud', compact('unidadesdesalud'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(unidaddesalud $unidaddesalud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, unidaddesalud $unidaddesalud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(unidaddesalud $unidaddesalud)
    {
        //
    }
}
