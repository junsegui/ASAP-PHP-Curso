<?php
//Ejemplo para iterar por un arrat eterogeneo
//significa que sus elementos pueden ser de distinto tipo
$vector = array("uno",2,true,5.4);
for ($i = 0; $i < 4; $i++) {
    print $vector[$i] . "<br>";
}
//var_dump, que imprime los formatos tambien.
var_dump($vector);
print"<br>";
//arrays key:value.
$a = array("a"=>"silla","b"=>"mesa","c"=>"plato");
print_r(array_keys($a));
print "<br>";
//Unshift y Push
$z = array(1, 2, 3, 4, 5);
array_push($z, 14);
print_r($z);

?>