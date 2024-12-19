<?php
// Definición del inventario de cómics
// Creamos un array multidimensional para almacenar las categorías y los datos de cada cómic
$inventario = [
    'suspense_terror' => [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
];

// Mostrar el inventario original en forma de tabla
mostrarComicsEnTabla(); // Función para mostrar los cómics en una tabla HTML

// Mostrar el valor total del almacén antes del descuento
mostrarValorAlmacen(); // Función para calcular y mostrar el valor total del almacén

// Aplicar descuento del 30% a todos los cómics en japonés
aplicarDescuentoManga(); // Función que aplica el descuento a los cómics con idioma japonés

// Mostrar el inventario actualizado después del descuento
mostrarComicsEnTabla(); // Mostrar nuevamente los cómics con los precios actualizados

// Mostrar el valor total del almacén después del descuento
mostrarValorAlmacen(); // Calcular y mostrar el valor total del almacén actualizado

// Función para mostrar los cómics en forma de tabla
function mostrarComicsEnTabla()
{
    global $inventario; // Accedemos al inventario definido fuera de la función
    echo '<br>';
    echo '<table border="1">'; // Inicia la tabla HTML
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>'; // Encabezados de la tabla

    // Recorremos las categorías del inventario
    foreach ($inventario as $categoria => $comics) {
        // Recorremos los cómics dentro de cada categoría
        foreach ($comics as $comic) {
            echo '<tr>'; // Inicia una fila de la tabla
            echo "<td>$categoria</td>"; // Muestra la categoría
            echo "<td>{$comic['titulo']}</td>"; // Muestra el título del cómic
            echo "<td>{$comic['editorial']}</td>"; // Muestra la editorial
            echo "<td>{$comic['autor']}</td>"; // Muestra el autor
            echo "<td>{$comic['idioma']}</td>"; // Muestra el idioma
            echo "<td>{$comic['precio']}</td>"; // Muestra el precio
            echo "<td>{$comic['stock']}</td>"; // Muestra el stock
            echo '</tr>'; // Termina la fila de la tabla
        }
    }

    echo '</table>'; // Termina la tabla HTML
}

// Función para calcular y mostrar el valor total del almacén
function mostrarValorAlmacen()
{
    global $inventario; // Accedemos al inventario definido fuera de la función
    $valor_total = 0; // Inicializamos el valor total del almacén

    // Recorremos las categorías del inventario
    foreach ($inventario as $categoria => $comics) {
        // Recorremos los cómics dentro de cada categoría
        foreach ($comics as $comic) {
            $valor_total += $comic['precio'] * $comic['stock']; // Sumamos el valor total (precio x stock)
        }
    }

    // Mostramos el valor total del almacén
    echo "<br>Total valor almacén es: $valor_total<br>";
}

// Función para aplicar un descuento del 30% a todos los cómics en japonés
function aplicarDescuentoManga()
{
    global $inventario; // Accedemos al inventario definido fuera de la función

    // Recorremos las categorías del inventario
    foreach ($inventario as $categoria => &$comics) {
        // Recorremos los cómics dentro de cada categoría
        foreach ($comics as &$comic) {
            // Verificamos si el idioma del cómic es japonés
            if ($comic['idioma'] == 'Japonés') {
                $comic['precio'] = $comic['precio'] * 0.7; // Aplicamos un descuento del 30% (70% del precio original)
            }
        }
    }
}
?>
