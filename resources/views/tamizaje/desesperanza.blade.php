@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="preguntash1">Cédula de desesperanza</h1>
    <form action="{{ route('tamizaje.save') }}" method="post">
        @csrf
        <p>Indicaciones: Conesta todas las preguntas, elige verdadero o falso de acuerdo a tu situación.</p>
        <section id="preguntas">
            <div class="contenedor-pregunta">
                <h2>1. Espero el futuro con esperanza y entusiasmo</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r1" value="0">Verdadero</p>
                        <p><input type="radio" name="r1" value="1">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>2. Puedo darme por vencido, renunciar, ya que no puedo hacer mejor las cosas por mí mismo</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r2" value="1">Verdadero</p>
                        <p><input type="radio" name="r2" value="0">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>3. Cuando las cosas van mal me alivia saber que las cosas no pueden permanecer tiempo así</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r3" value="0">Verdadero</p>
                        <p><input type="radio" name="r3" value="1">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>4. No puedo imaginar cómo será mi vida dentro de 10 años</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r4" value="1">Verdadero</p>
                        <p><input type="radio" name="r4" value="0">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>5. Tengo bastante tiempo para llevar a cabo las cosas que quisiera poder hacer</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r5" value="0">Verdadero</p>
                        <p><input type="radio" name="r5" value="1">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>6. En el futuro, espero conseguir lo que me pueda interesar</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r6" value="0">Verdadero</p>
                        <p><input type="radio" name="r6" value="1">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>7. Mi futuro me parece oscuro</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r7" value="1">Verdadero</p>
                        <p><input type="radio" name="r7" value="0">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>8. Espero más cosas buenas de la vida que lo que la gente suele conseguir por término medio</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r8" value="0">Verdadero</p>
                        <p><input type="radio" name="r8" value="1">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>9. No logro hacer que las cosas cambien, y no existen razones para creer que pueda en el futuro</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r9" value="1">Verdadero</p>
                        <p><input type="radio" name="r9" value="0">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>10. Mis pasadas experiencias me han preparado bien para mi futuro</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r10" value="0">Verdadero</p>
                        <p><input type="radio" name="r10" value="1">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>11. Todo lo que puedo ver por delante de mí es más desagradable que agradable</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r11" value="1">Verdadero</p>
                        <p><input type="radio" name="r11" value="0">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>12. No espero conseguir lo que realmente deseo</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r12" value="1">Verdadero</p>
                        <p><input type="radio" name="r12" value="0">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>13. Cuando miro hacia el futuro, espero que seré más feliz de lo que soy ahora</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r13" value="0">Verdadero</p>
                        <p><input type="radio" name="r13" value="1">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>14. Las cosas no marchan como yo quisiera</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r14" value="1">Verdadero</p>
                        <p><input type="radio" name="r14" value="0">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>15. Tengo una gran confianza en el futuro</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r15" value="0">Verdadero</p>
                        <p><input type="radio" name="r15" value="1">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>16. Nunca consigo lo que deseo, por lo que es absurdo desear cualquier cosa</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r16" value="1">Verdadero</p>
                        <p><input type="radio" name="r16" value="0">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>17. Es muy improbable que pueda lograr una satisfacción real en el futuro</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r17" value="1">Verdadero</p>
                        <p><input type="radio" name="r17" value="0">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>18. El futuro me parece vago e incierto</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r18" value="1">Verdadero</p>
                        <p><input type="radio" name="r18" value="0">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>19. Espero más bien épocas buenas que malas</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r19" value="0">Verdadero</p>
                        <p><input type="radio" name="r19" value="1">Falso</p>
                    </div>
                </div>
                <div class="contenedor-pregunta" id="0">
                    <h2>20. No merece la pena que intente conseguir algo que desee, porque probablemente no lo lograré</h2>
                    <div class="opciones">
                        <p><input type="radio" name="r20" value="1">Verdadero</p>
                        <p><input type="radio" name="r20" value="0">Falso</p>
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
