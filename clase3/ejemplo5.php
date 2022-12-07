<?php
//tokenizing
//se usa mucho con archivos del tipo CSV
$test = "perro|gato|canario|conejo";
$separador = "|";
$animal = strtok($test, $separador);
while(is_string($animal)) {
    if($animal) {
        echo $animal . "<br>";
        
    }
    $animal = strtok($separador);
}
//Explode
$fecha = "2022-12-05";
$fechaVector = explode("-", $fecha);
for ($i=0;$i<=2;$i++) {
    echo $fechaVector[$i] . "<br>";
}
?>