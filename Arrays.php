<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>

    <?php
    //  Ejercicio 1: Crear un array asociativo y mostrar sus valores utilizando foreach
    // Declaramos un array asociativo con claves y valores
    echo "<h1>Ejercicio 1 </h1>";
    $datos = array(
        "nombre" => "Sara",
        "apellido" => "Martinez",
        "Edad" => 23,
        "Ciudad" => "Barcelona",
    );
    // Utilizamos un contador para enumerar los datos en el formato solicitado
    $contador = 1;  // Inicializamos el contador en 1

    // Recorremos el array asociativo con foreach
    foreach ($datos as $key => $value) {
        echo "dato " . $contador . "º: " . $value . "<br>";
        $contador++; // Incrementamos el contador para el siguiente dato
    }


    // Ejercicio 2:  Muestra los valores del array del ejercicio 1 mostrando la clave y el valor u lizando 
    echo "<h1>Ejercicio 2 </h2>";

    // Recorremos el array nuevamente, pero ahora mostramos tanto la clave como el valor
    foreach ($datos as $key => $value) {
        echo $key . ": " . $value . "<br>";
        $contador++; // Incrementamos el contador
    }


    //  Ejercicio 3: Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.
    echo "<h1>Ejercicio 3 </h1>";
    $datos["Edad"] = 24; // Modificamos el valor de la clave "Edad" a 24
    $contador = 1; // Inicializamos el contador en 1

    // Recorremos el array y mostramos todas las claves y valores, numerando cada dato
    foreach ($datos as $key => $value) {
        echo "dato " . $contador . "º: " . $value . "<br>";
        $contador++;
    }


    // Ejercicio 4: Borra la ciudad del array y vuelve a mostrar toda su información usando la función var_dump
    echo "<h1>Ejercicio 4 </h1>";
    // Eliminamos la clave "Ciudad" del array
    unset($datos["Ciudad"]);
    // Usamos var_dump para mostrar la estructura completa del array después de la modificación
    var_dump($datos);



    // Ejercicio 5:
    echo "<h1>Ejercicio 5 </h1>";

    // Declaramos la cadena de texto con valores separados por comas
    $letters = "a,b,c,d,e,f"; // Eliminé los espacios después de las comas para mayor claridad

    // Usamos la función explode para convertir la cadena en un array
    $array = explode(",", $letters);

    // Ordenamos el array en orden descendente usando rsort
    rsort($array);

    // Inicializamos un contador descendente
    $contador = count($array);

    // Recorremos el array ordenado en orden descendente
    foreach ($array as $letter) {
        echo "letter " . $contador . "°: " . trim($letter) . "<br>"; // Trim para evitar espacios no deseados
        $contador--;
    }


    // Ejercicio 6
    echo "<h1>Ejercicio 6</h1>";
    // Crear el array asociativo con las notas de los estudiantes
    $notas = [
        "Miguel" => 5,
        "Luis" => 7,
        "Marta" => 10,
        "Isabel" => 8,
        "Aitor" => 4,
        "Pepe" => 1,
    ];

    // Ordenar el array asociativo por las notas en orden descendente
    arsort($notas);

    // Mostrar las notas en el formato solicitado
    echo "Notas de los estudiantes: ";
    foreach ($notas as $nombre => $nota) {
        echo "$nombre: $nota ";
    }



    // Ejercicio 7
    echo "<h1>Ejercicio 7</h1>";
    // Crear el array asociativo con las notas de los estudiantes
    $notas = [
        "Miguel" => 5,
        "Luis" => 7,
        "Marta" => 10,
        "Isabel" => 8,
        "Aitor" => 4,
        "Pepe" => 1,
    ];

    // Calcular la media de las notas
    $media = array_sum($notas) / count($notas);

    // Mostrar la media con 2 decimales
    echo "Media de las notas: " . number_format($media, 2) . "<br>";

    // Mostrar los alumnos con notas por encima de la media
    echo "Alumnos con nota por encima de la media:<br>";
    foreach ($notas as $nombre => $nota) {
        if ($nota > $media) {
            echo $nombre . "<br>";
        }
    }


    // Ejercicio 8
    echo "<h1>Ejercicio 8</h1>";

    // Crear el array asociativo con las notas de los estudiantes
    $notas = [
        "Miguel" => 5,
        "Luis" => 7,
        "Marta" => 10,
        "Isabel" => 8,
        "Aitor" => 4,
        "Pepe" => 1,
    ];

    // Encontrar la nota más alta y el nombre del estudiante
    $nota_maxima = max($notas); // Encuentra el valor más alto en el array
    $mejor_alumno = array_search($nota_maxima, $notas); // Encuentra la clave asociada al valor más alto

    // Mostrar la nota más alta y el nombre del mejor estudiante
    echo "La nota más alta es $nota_maxima y el mejor alumno es $mejor_alumno.";






















    ?>

</body>

</html>