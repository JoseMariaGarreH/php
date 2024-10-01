Introduce dos números por teclado:
<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
?>
<?php
    if($datos[0] > $datos[1]){
        echo "El mayor valor es $datos[0]";
    }else if($datos[0] < $datos[1]){
        echo "El mayor valor es $datos[1]";
    }else{
        echo "Pareja de $datos[0]"; 
    }
?>