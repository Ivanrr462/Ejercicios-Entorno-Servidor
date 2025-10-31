<?php

function categoria(int $num): string {
    if ($num >= 0 && $num <= 39) {
        $categoria = "bajo";
        return $categoria;
    } else if ($num >= 40 && $num <= 69) {
        $categoria = "medio";
        return $categoria;
    } else if ($num >= 70 && $num <= 100) {
        $categoria = "alto";
        return $categoria;
    } else {
        return "El numero no es valido";
    }
}

function escribir(array $num): void {
    $path = __DIR__ . "/salida.log";

    $fh = fopen($path, "a");

    if ($fh === false) exit("No se pudo abrir el archivo");

    $fecha = date("Y-m-d");
    foreach ($num as $numeros) {
        $categoria = categoria($numeros);
        fwrite($fh, $fecha . " El numero $numeros pertenece a la categoría $categoria\n");
    }

    fclose($fh);
}

//Día.Mes.Año El número X pertenece a la categoría Y