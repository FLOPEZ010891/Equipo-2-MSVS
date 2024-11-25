<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <?php
     $puntuacion=0;

        if($_POST){
            $r1= $_POST["r1"];
            $r2= $_POST["r2"];
            $r3= $_POST["r3"];
            $r4= $_POST["r4"];
            $r5= $_POST["r5"];
            $r6= $_POST["r6"];
            $r7= $_POST["r7"];
            $r8= $_POST["r8"];
            $r9= $_POST["r9"];
            $r10= $_POST["r10"];
            $r11= $_POST["r11"];
            $r12= $_POST["r12"];
            $r13= $_POST["r13"];
            $r14= $_POST["r14"];
            $r15= $_POST["r15"];
            $r16= $_POST["r16"];
            $r17= $_POST["r17"];
            $r18= $_POST["r18"];
            $r19= $_POST["r19"];
            $r20= $_POST["r20"];

            if ($r1=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r2=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r3=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r4=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r5=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r6=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r7=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r8=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r9=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r10=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r11=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r12=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r13=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r14=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r15=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r16=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r17=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r18=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r19=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            if ($r20=="1"){
                $puntuacion+=1;
            } else {
                $puntuacion+=0;
            }
            print $puntuacion;

            $conexion= mysqli_connect("localhost", "root", "", "msvs") or die("Problemas con la conexión");
            // Check connection
            if (!$conexion) { 
                die("Connection failed: " . mysqli_connect_error()); 
            } 
            //$puntuacion= $_POST[puntuacion];
            $date= date("d-m-y H:i:s");
            $query= "INSERT INTO tamizaje (FechaDesesperanza, PuntajeDesesperanza) VALUES ('$date', '$puntuacion')";
            if (mysqli_query($conexion, $query)) { 
                if ($puntuacion<=8){
                    echo "<div class='alert alert-success mt-4' role='alert'>
                <h3>Tus resultados se han guardado satisfactoriamente</h3>
                <p>Estimd@________________ en relación con el puntaje obtenido en el Tamizaje, te informamos que los resultados corresponden a sin alteraciones que actualmente comprometan a tu salud mental. Te sugerimos sigas cuidando de tu salud mental a través de las recomendaciones que te dejamos en esta página.</p> 
                <a class='btn btn-outline-primary' href='../inicio.html' role='button'>Continuar</a></div>";
                }else if($puntuacion>8&& $puntuacion<15){
                    echo "<div class='alert alert-success mt-4' role='alert'>
                <h3>Tus resultados se han guardado satisfactoriamente</h3>
                <p>Estimd@________________ en relación con el puntaje obtenido en la escala del Tamizaje, te informamos que los resultados sugieren alguna alteración que actualmente compromete tu salud mental. Te invitamos a visitar tu unidad de salud más cercana a tu domicilio o puedes marcar a la línea de la vida al 800 911 2000 para recibir asesoría.</p> 
                <a class='btn btn-outline-primary' href='../inicio.html' role='button'>Continuar</a></div>";
                }else if($puntuacion>=15){
                    echo "<div class='alert alert-success mt-4' role='alert'>
                <h3>Tus resultados se han guardado satisfactoriamente</h3>
                <p>Estimd@________________ en relación con el puntaje obtenidos en la escala del Tamizaje, te informamos que los resultados sugieren alguna alteración que actualmente compromete tu salud mental. Recibirás la llamada del personal que integra el programa para iniciar con el proceso de atención, en la que se te hará una devolución de tus resultados.</p> 
                <a class='btn btn-outline-primary' href='../inicio.html' role='button'>Continuar</a></div>";
                }
                 
                } else { 
                    echo "Error: " . $query . "<br>" . mysqli_error($conexion); 
                    } 
                mysqli_close($conexion);
            //echo '<script>alert("Tu puntuación es" .$puntuacion)</script>';
        }

    ?>

    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> 
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
