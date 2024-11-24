@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="preguntash1">Cuestionario AUDIT</h1>
    <form action="{{ route('tamizaje.saveaudit') }}" method="post">
        @csrf
        <p>Indicaciones: Conesta todas las preguntas, elige la opción que más se adecue a tu situación.</p>
        <section id="preguntas">
            <div class="contenedor-pregunta">
                <h2>1. ¿Qué tan frecuentemente ingiere bebidas alcohólicas?</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r1" value="0">Nunca</p>
                        <p><input type="radio" name="r1" value="1">Una vez al mes o menos</p>
                        <p><input type="radio" name="r1" value="2">Dos o cuatro veces al mes</p>
                        <p><input type="radio" name="r1" value="3">Dos o tres veces por semana</p>
                        <p><input type="radio" name="r1" value="4">Cuatro o más veces por semana</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>2. ¿Cuántas copas se toma en un día típico de los que bebe?</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r2" value="0">1 o 2</p>
                        <p><input type="radio" name="r2" value="1">3 o 4</p>
                        <p><input type="radio" name="r2" value="2">5 o 6</p>
                        <p><input type="radio" name="r2" value="3">7 a 9</p>
                        <p><input type="radio" name="r2" value="4">10 o más</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>3. ¿Qué tan frecuentemente toma seis o más copas en la misma ocasión?</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r3" value="0">Nunca</p>
                        <p><input type="radio" name="r3" value="1">Menos de una vez al mes</p>
                        <p><input type="radio" name="r3" value="2">Mensualmente</p>
                        <p><input type="radio" name="r3" value="3">Semanalmente</p>
                        <p><input type="radio" name="r3" value="4">Diario o casi diaro</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>4. Durante todo el año ¿le ocurrió que no pudo parar de beber una vez que había empezado?</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r4" value="0">Nunca</p>
                        <p><input type="radio" name="r4" value="1">Menos de una vez al mes</p>
                        <p><input type="radio" name="r4" value="2">Mensualmente</p>
                        <p><input type="radio" name="r4" value="3">Semanalmente</p>
                        <p><input type="radio" name="r4" value="4">Diario o casi diaro</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>5. Durante todo el año ¿qué tan frecuentemente dejó de hacer algo qye debería haber hecho por beber?</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r5" value="0">Nunca</p>
                        <p><input type="radio" name="r5" value="1">Menos de una vez al mes</p>
                        <p><input type="radio" name="r5" value="2">Mensualmente</p>
                        <p><input type="radio" name="r5" value="3">Semanalmente</p>
                        <p><input type="radio" name="r5" value="4">Diario o casi diaro</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>6. Durante todo el año ¿qué tan freuentemente bebió a la mañana siguiente de haber bebido en exceso el día anterior?</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r6" value="0">Nunca</p>
                        <p><input type="radio" name="r6" value="1">Menos de una vez al mes</p>
                        <p><input type="radio" name="r6" value="2">Mensualmente</p>
                        <p><input type="radio" name="r6" value="3">Semanalmente</p>
                        <p><input type="radio" name="r6" value="4">Diario o casi diaro</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>7. Durante todo el año ¿qué tan frecuentemente se sintió culpable o tuvo remordimiento por haber bebido?</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r7" value="0">Nunca</p>
                        <p><input type="radio" name="r7" value="1">Menos de una vez al mes</p>
                        <p><input type="radio" name="r7" value="2">Mensualmente</p>
                        <p><input type="radio" name="r7" value="3">Semanalmente</p>
                        <p><input type="radio" name="r7" value="4">Diario o casi diaro</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>8. Durante todo el año ¿qué tan frecuentemente olvidó algo de lo que había pasado cuando estuvo bebiendo?</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r8" value="0">Nunca</p>
                        <p><input type="radio" name="r8" value="1">Menos de una vez al mes</p>
                        <p><input type="radio" name="r8" value="2">Mensualmente</p>
                        <p><input type="radio" name="r8" value="3">Semanalmente</p>
                        <p><input type="radio" name="r8" value="4">Diario o casi diaro</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>9. ¿Se ha lastimado o alguien ha resultado lesionado como consecuencia de su ingestión de alcohol?</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r9" value="0">No</p>
                        <p><input type="radio" name="r9" value="2">Sí, pero no en el último año</p>
                        <p><input type="radio" name="r9" value="4">Sí, en el último año</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <h2>10. ¿Algún amigo, familiar o doctor se ha preocupado por la forma en que bebe o le ha sugerido que le baje?</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r10" value="0">No</p>
                        <p><input type="radio" name="r10" value="2">Sí, pero no en el último año</p>
                        <p><input type="radio" name="r10" value="4">Sí, en el último año</p>
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
