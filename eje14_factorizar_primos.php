<?php

    function factoresPrimos($parametro) {
        $num_incrementado = 2;
        $array = [];
        $i = 0;

        while($parametro <> 1){
            if($parametro != 1){
                if($parametro%$num_incrementado == 0){
                    $parametro = $parametro / $num_incrementado;
                }else{
                    $array[$i] = $num_incrementado;
                    $num_incrementado += $num_incrementado + 1;
                }
            }
            $i++;
        }

        return $array;
    }


    function imprimeFactoresPrimos($array){
        foreach ($array as $indice => $valor){
            $factores_concatenados = $valor." ";
        }
        return $factores_concatenados;
    }

    while($fila = fgets(STDIN)): ?>
        <?php $numero = explode(" ",trim($fila));?>
        <p><?php echo $numero ?> = <?php echo imprimeFactoresPrimos(factoresPrimos($numero)) ?></p>
    <?php endwhile; ?>

?>