@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="preguntash1">Inventario de Ansiedad de Beck</h1>
    <form action="{{ route('tamizaje.saveansiedad') }}" method="post">
        @csrf
        <p>Indicaciones: A continuación se presenta una lista de los síntomas más comunes de la ansiedad.</p>
        <p>Lee cuidadosamente cada afirmación. Indica cuánto te ha molestado cada síntoma durante la última semana, inclusive hoy. Selecciona de acuerdo a la intensidad de la molestia.</p>
        <section id="preguntas">
            <div class="contenedor-pregunta">
                <h2>1. Entumecimiento, hormigueo</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r1" value="0">Poco o nada</p>
                        <p><input type="radio" name="r1" value="1">Más o menos</p>
                        <p><input type="radio" name="r1" value="2">Moderadamente</p>
                        <p><input type="radio" name="r1" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>2. Sentir oleadas de calor (bochorno)</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r2" value="0">Poco o nada</p>
                        <p><input type="radio" name="r2" value="1">Más o menos</p>
                        <p><input type="radio" name="r2" value="2">Moderadamente</p>
                        <p><input type="radio" name="r2" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>3. Debilitamiento de las piernas</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r3" value="0">Poco o nada</p>
                        <p><input type="radio" name="r3" value="1">Más o menos</p>
                        <p><input type="radio" name="r3" value="2">Moderadamente</p>
                        <p><input type="radio" name="r3" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>4. Dificultad para relajarse</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r4" value="0">Poco o nada</p>
                        <p><input type="radio" name="r4" value="1">Más o menos</p>
                        <p><input type="radio" name="r4" value="2">Moderadamente</p>
                        <p><input type="radio" name="r4" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>5. Miedo a que pase lo peor</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r5" value="0">Poco o nada</p>
                        <p><input type="radio" name="r5" value="1">Más o menos</p>
                        <p><input type="radio" name="r5" value="2">Moderadamente</p>
                        <p><input type="radio" name="r5" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>6. Sensación de mareo</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r6" value="0">Poco o nada</p>
                        <p><input type="radio" name="r6" value="1">Más o menos</p>
                        <p><input type="radio" name="r6" value="2">Moderadamente</p>
                        <p><input type="radio" name="r6" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>7. Opresión en el pecho o laitos acelerados</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r7" value="0">Poco o nada</p>
                        <p><input type="radio" name="r7" value="1">Más o menos</p>
                        <p><input type="radio" name="r7" value="2">Moderadamente</p>
                        <p><input type="radio" name="r7" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>8. Inseguridad</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r8" value="0">Poco o nada</p>
                        <p><input type="radio" name="r8" value="1">Más o menos</p>
                        <p><input type="radio" name="r8" value="2">Moderadamente</p>
                        <p><input type="radio" name="r8" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>9. Terror</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r9" value="0">Poco o nada</p>
                        <p><input type="radio" name="r9" value="1">Más o menos</p>
                        <p><input type="radio" name="r9" value="2">Moderadamente</p>
                        <p><input type="radio" name="r9" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>10. Nerviosismo</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r10" value="0">Poco o nada</p>
                        <p><input type="radio" name="r10" value="1">Más o menos</p>
                        <p><input type="radio" name="r10" value="2">Moderadamente</p>
                        <p><input type="radio" name="r10" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>11. Sensación de ahogo</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r11" value="0">Poco o nada</p>
                        <p><input type="radio" name="r11" value="1">Más o menos</p>
                        <p><input type="radio" name="r11" value="2">Moderadamente</p>
                        <p><input type="radio" name="r11" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>12. Manos temblorosas</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r12" value="0">Poco o nada</p>
                        <p><input type="radio" name="r12" value="1">Más o menos</p>
                        <p><input type="radio" name="r12" value="2">Moderadamente</p>
                        <p><input type="radio" name="r12" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>13. Cuerpo tembloroso</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r13" value="0">Poco o nada</p>
                        <p><input type="radio" name="r13" value="1">Más o menos</p>
                        <p><input type="radio" name="r13" value="2">Moderadamente</p>
                        <p><input type="radio" name="r13" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>14. Miedo a perder el control</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r14" value="0">Poco o nada</p>
                        <p><input type="radio" name="r14" value="1">Más o menos</p>
                        <p><input type="radio" name="r14" value="2">Moderadamente</p>
                        <p><input type="radio" name="r14" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>15. Dificultad para respirar</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r15" value="0">Poco o nada</p>
                        <p><input type="radio" name="r15" value="1">Más o menos</p>
                        <p><input type="radio" name="r15" value="2">Moderadamente</p>
                        <p><input type="radio" name="r15" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>16. Miedo a morir</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r16" value="0">Poco o nada</p>
                        <p><input type="radio" name="r16" value="1">Más o menos</p>
                        <p><input type="radio" name="r16" value="2">Moderadamente</p>
                        <p><input type="radio" name="r16" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>17. Asustado</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r17" value="0">Poco o nada</p>
                        <p><input type="radio" name="r17" value="1">Más o menos</p>
                        <p><input type="radio" name="r17" value="2">Moderadamente</p>
                        <p><input type="radio" name="r17" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>18. Indigestión o malestar estomacal</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r18" value="0">Poco o nada</p>
                        <p><input type="radio" name="r18" value="1">Más o menos</p>
                        <p><input type="radio" name="r18" value="2">Moderadamente</p>
                        <p><input type="radio" name="r18" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>19. Debilidad</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r19" value="0">Poco o nada</p>
                        <p><input type="radio" name="r19" value="1">Más o menos</p>
                        <p><input type="radio" name="r19" value="2">Moderadamente</p>
                        <p><input type="radio" name="r19" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>20. Ruborizarse</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r20" value="0">Poco o nada</p>
                        <p><input type="radio" name="r20" value="1">Más o menos</p>
                        <p><input type="radio" name="r20" value="2">Moderadamente</p>
                        <p><input type="radio" name="r20" value="3">Severamente</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>21. Sudoración (no debida al calor)</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r21" value="0">Poco o nada</p>
                        <p><input type="radio" name="r21" value="1">Más o menos</p>
                        <p><input type="radio" name="r21" value="2">Moderadamente</p>
                        <p><input type="radio" name="r21" value="3">Severamente</p>
                    </div>
                </div>
            </div>
                
        </section>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Puntuar</button>
        </div>
        @if ($errors->customBag->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->customBag->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </form>
</div>

@endsection
