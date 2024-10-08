<?php
function factoresPrimos($parametro) {
    $num_incrementado = 2;
    $array = [];
    
    while ($parametro != 1) {
        if ($parametro % $num_incrementado == 0) {
            if (isset($array[$num_incrementado])) {
                $array[$num_incrementado]++;
            } else {
                $array[$num_incrementado] = 1;
            }
            $parametro = $parametro / $num_incrementado;
        } else {
            $num_incrementado++;
        }
    }
    
    return $array;
}

function imprimeFactoresPrimos($array) {
    $factores_concatenados = "";
    foreach ($array as $factor => $exponente) {
        $factores_concatenados .= "$factor ^ $exponente * ";
    }
    return rtrim($factores_concatenados, " * ");
}

while ($fila = fgets(STDIN)){
    $numero = trim($fila);
    echo "<p>$numero = " .imprimeFactoresPrimos(factoresPrimos($numero)) . "</p>\n";
}
?>
