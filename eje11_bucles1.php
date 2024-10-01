<?php
    $linea = fgets(STDIN);
    $datos = explode(" ", trim($linea));
?>
<?php
    $i = 0;
    $suma = 0;

    /*for($x = 0;$x <= count($datos);$x++){
        if($datos[$x] == 0){
            break;
        }else{
            $suma += $datos[$x];
        }
    }*/

    while($datos[$i] != null){
        if($datos[$i] == 0){
            break;
        }else{
            $suma += $datos[$i];
        }
        $i++;
    }
?>
<p><?php echo "Se han sumado ".$i." números, dando como resultado un total de ".$suma?></p>
