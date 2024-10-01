<?php
    $linea = fgets(STDIN);
    $datos = explode(" ", trim($linea));
?>
<?php 
    echo "<table border=\"solid 1px\">\n";
    //Filas
    for($x = 0;$x < $datos[0];$x++){
        echo "    <tr>\n";
        //Columnas
        for($i = 0;$i < $datos[1];$i++){
            echo "        <td></td>\n";
        }
        echo "    </tr>\n";
    }
    echo "</table>"
?>