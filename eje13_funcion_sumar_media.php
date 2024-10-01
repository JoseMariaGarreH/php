<?php

function suma($numeros) {
    $resultado = 0;
    foreach ($numeros as $numero) {
        $resultado += $numero;
    }

    return $resultado;
}

function media($numeros) {
    $suma = suma($numeros);

    return $suma / count($numeros);
}

while($fila = fgets(STDIN)) : ?>
<p><?php
    $argumentos = explode(" ",trim($fila));
    $n_arg = count($argumentos);
    if(isset($n_arg) && $n_arg >= 3) {
        $operacion = array_shift($argumentos);
        switch ($operacion) {
            case 'suma':
                $msg = "La suma de los números es: " .suma($argumentos);
                break;
            case 'media':
                $msg = "La media de los números es: " .media($argumentos);
                break;
            default:
                $msg = "(Error) Operación no permitida";
        }
    } else {
        $msg = "(Error) No dispongo de suficientes argumentos.";
    }
    echo $msg
?>
</p>
<?php endwhile; ?>
