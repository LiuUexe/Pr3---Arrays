<?php
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


mostrarComicsEnTabla();
mostrarValorAlmacen(); 
aplicarDescuentoManga();
mostrarComicsEnTabla();
mostrarValorAlmacen();

function mostrarComicsEnTabla()
{
    global $inventario;
    echo '<br>';
    echo '<table border="1">';
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';

    foreach ($inventario as $categoria => $comics) {

        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }

    echo '</table>';
}


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
