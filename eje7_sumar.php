Dime una lista de números separados por espacios:
<?php 
    $linea = fgets(STDIN);
    $datos = explode(" ", trim($linea));?>
<?php 
    $numero = 0;
    if(count($datos) >= 2) {
        /*for ($x = 0; $x <= count($datos) - 1; $x++) {
            $numero += $datos[$x]; 
        }*/
        $numero = $datos[0] + $datos[1];
      	echo $numero;
    }else{
        echo "Argumentos insuficientes";
    }     
?>
Se han introducido <?php echo count($datos); ?> números
