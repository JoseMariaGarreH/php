<?php 

    $entrada = fgets(STDIN);
    $datos = explode(" ", trim($entrada));

    $cadena = letraCoincidente($datos);

    echo "Letras acertadas ".$cadena."\n";

    function letraCoincidente($array) : String{
        $palabra = array_shift($array);
        $palabraOculta = str_repeat("_", strlen($palabra));;

        foreach($array as $letra){
            if(in_array($letra,$array)){
                for($i = 0;$i < strlen($palabra);$i++){
                    if($palabra[$i] === $letra){
                        $palabraOculta[$i] = $letra;
                    }
                }
            }
        }

        return $palabraOculta;
    }
?>