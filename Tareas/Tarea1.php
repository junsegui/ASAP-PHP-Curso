<?php

?>

<!-- 1:
Cual de las siguientes opciones no es un nombre de variable valido?

$666666xyz

$the first

$file-name

2:
Cual será la salida del siguiente código?
$num = 33;

(boolean) $num;

echo $num;

Resp:La respuesta es 33


3:
Cual será la salida del siguiente código?
echo gettype("4");
Resp: Retornara srintg


4:
Cual será la salida del siguiente código?
$test_val = 5.5466;

settype($test_val, "integer");

echo $test_val;

Resp: Retornara un 5


5:
Cual de las siguientes instrucciones no contiene una expresión?
    4;

    gettype(44);

    5/12;

Resp : Todas son expresiones
6:
Cual de las instrucciones de la pregunta 5, contiene un operador?

Resp: La tercera instuccion


7:
Cual será la salida de esta instrucción, y que tipo de valor retorna?
Echo 5 < 2

Resp: No retorna nada por que es false


8:
Use IF para imprimir un string que diga 
“Mensaje para JOVENES si la variable 
$age de tipo integer esta entre 18 y 35. 
Si $age contiene otro valor, el mensaje sera 
“Mensaje Generico, y si $age llegara a estar entre 
1 y 17 entonces, el string a imprimir sera “Mensajes a los chicos”


$age = 20;
if ($age >= 18 && $age <= 35) {
    echo "Mensaje para JOVENES";
}

else if($age >1 && $age <=17) {
    echo "Mensaje a los chicos";
    
} 
else
    echo "Mensaje Generico";

$age = 20;
if ($age >= 18 && $age <= 35) {
    echo "Mensaje para JOVENES";
} elseif ($age >1 && $age <=17) {
    echo "Mensaje a los chicos";

} else {
    echo "Mensaje Generico";
}
echo "<br>"

-->