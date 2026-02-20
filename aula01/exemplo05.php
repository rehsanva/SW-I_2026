<?php
    //OPERADORES ARITMÉTICOS
    // true = 1 / false =    (vazio)
    $a = 1;
    $b = 5;

    $resultado = $a < $b;

    echo "Resultado = $resultado";
    echo "<hr>";
    var_dumP($resultado);

    if ($resultado){
        echo "Resultado = SIM";
    } else {
        echo "Resultado = NÃO";
    }
    ?>