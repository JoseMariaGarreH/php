<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
?>
<?php
    $resultado = 0;
    switch($datos[0]){
        case '+':
            $resultado = $datos[1] + $datos[2];
            break;
        case '-':
            $resultado = $datos[1] - $datos[2];
            break;
        case 'x':
            $resultado = $datos[1] * $datos[2];
            break;
        case ':':
            $resultado = $datos[1] / $datos[2];
            break;
    }
?>
<p><?php echo "$datos[1] $datos[0] $datos[2] = $resultado"?></p>