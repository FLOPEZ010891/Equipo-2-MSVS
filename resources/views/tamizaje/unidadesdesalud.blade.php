@extends('layouts.app')

@section('content')

<div class="container">
        <h1><center>Información de las Unidades de Salud</h1>
    </div>
    <div class="container">
        <p></p>
        <h2>Seleccione el municipio más cercano a su domicilio para ver la información del centro de Salud</h2>
       <form action="{{route('unidadesdesalud.index')}}" method="get">
       <div class="input-group"> 
       <select class="form-select" name="seleccion" aria-label="Default select example">
            <option selected>Seleccione el municipio</option>
            <option value="1">Pachuca</option>
            <option value="2">Ixmiquilpan</option>
            <option value="3">Sahagún</option>
            <option value="4">San Felipe Orizatlán</option>
            <option value="5">Tula</option>
            <option value="6">Huejutla</option>
          </select>
          <button type="submit" class="btn btn-primary">Consultar</button>
          </div>
        </form>
          <br>
          <table class="table table-hover">

            <thead class="table-light">
                <tr>
                    
                    <th>Nombre</th>
                    <th>Especialidades</th>
                    <th>Domicilio</th>
                    <th>Teléfono</th>
                    <th>Horario de atención</th>
                    <th>Email</th>
                    <th>Ubicación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($unidadesdesalud as $unidaddesalud)
                 <?php
                 $ubicacionUnidad= $unidaddesalud->Ubicación;
                 $mail= $unidaddesalud->email;
                 ?>
                <tr>
                    <td>{{$unidaddesalud->Nombre}}</td>
                    <td>{{$unidaddesalud->Especialidades}}</td>
                    <td>{{$unidaddesalud->domicilio}}</td>
                    <td>{{$unidaddesalud->telefono}}</td>
                    <td>{{$unidaddesalud->horarioAtencion}}</td>
                    <td><a href="mailto:<?php echo $mail?>">{{$unidaddesalud->email}}</a></td>
                    <td><a href="<?php echo $ubicacionUnidad; ?>">{{$unidaddesalud->Ubicación}}</a></td>
                </tr>
                
                @endforeach
                
            </tbody>
            <tbody id="table_data"></tbody>

            </table>
    </div>

@endsection