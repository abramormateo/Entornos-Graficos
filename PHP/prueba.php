<?php
function prueba($arg1, $arg2){
    echo "Funcion de ejemplo.\n";
    echo "Argumento 1 vale: $arg1\n";
    echo "Argumento 2 vale: $arg2\n";
    if ($arg1 < $arg2){
        return true; 
    }
    else{
        return false;
    }
}
$valor_devuelto = prueba(5,10);
if ($valor_devuelto){
    echo "Argumento 1 es menor que Argumento 2";
}
else{
    echo "Argumento 1 es mayor o igual que Argumento 2";
}
?>