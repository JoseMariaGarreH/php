Introduce dos puntuaciones por teclado:
<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
?>
<?php
    if($datos[0] > $datos[1]){
        echo "El jugador ganador es el 1 con $datos[0]";
    }else if($datos[0] < $datos[1]){
        echo "El jugador ganador es el 2 con $datos[1]";
    }else{
        echo "Ha habido un empate a $datos[0]"; 
    }
?>