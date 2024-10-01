Dime una lista de números separados por espacios:
<?php
    $linea = fgets(STDIN);
    $datos = explode(" ", trim($linea));?>

El primer número es el: <?php echo $datos[0]; echo "\n";?> 
El segundo número es el: <?php echo $datos[1]; echo "\n";?> 
El tercer número es el: <?php echo $datos[2]; echo "\n";?>