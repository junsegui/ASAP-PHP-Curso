<?php
echo "
1:
Crear un script que contenga al menos 4 tipos de variables diferentes. 
Coloque distintos valores de diferentes tipos de dato y use la funcion gettype()para imprimir cada tipo en el  browser.

 <br>";

$string = "Hola";
$number= 14;
$boolean = true;
$double = 3.14;
echo gettype($string)."<br>";
echo gettype($number)."<br>";
echo gettype($boolean)."<br>";
echo gettype($double)."<br>";
echo "2:Asigne valores a 2 variables. Use operadores de comparasion operators para testear si el 1er dato es <br>";
$n1=14;
$n2=35;
print $n1 == $n2;
print $n1 < $n2;
print $n1 > $n2;
print $n1 <= $n2;

print "<br>";
print "3: Encuentre los errores en este  PHP <br> ";

print 'How are you? <br>';
print "I'm fine. <br>";

print "Las cosas que estaban mal son el apostrofe del i'm y como cierra de mal el tag php <br>";

print "4: Escriba en  PHP un código que calcule el 
costo total de esta cena en un restaurant: 2 hamburguesas 
a $4.95 cada una, una chocolatada a $1.95, y una cocacola a  
85 centavos. El IVA es de 7.5%, y debe dejar una propina 
prefi
ja del   16%.";

$costoTotal = 0;
$hamburgesa = 4.95;
$chocolatada = 1.95;
$coca = 0.85;
$propina = 16;
$IVA = 17;


$costoTotal = (((2 * $hamburgesa) + $chocolatada + $coca) * 107.5) / 100;
print "<br>";
$totalPropina = ($costoTotal * 16) / 100;
print "El costo total de la comida fue de:$${costoTotal} y la propina dada fue de: $${totalPropina} <br>";

echo "5: Modifique su solución anterior imprimiendo una salida
 formateada como un ticket, para cada item de la comida, 
 imprima el precio, la cantidad y el cotso total.  
 Imprima el total sin impuesto y luego con el impuesto, 
 a éste último total le agrega la propina.
  Asegúrese que los precios estén verticalmente alineados . <br>
";
echo "Ticket <br>
Hamburguesa simple X2: $${hamburgesa}<br>
Chocolatada: $${chocolatada} <br>
Coca-Cola: $${coca}<br>
IVA: 17% <br>
*********************<br>
Total:$${costoTotal}<br>";
echo "6: Escriba en PHP un código que setee la variable 
first_name a su nombre y  last_name 
a su apellido. Imprima un string conteniendo su nombre 
y apellido separados por un espacio. También imprima la 
cantidad de caracteres del string.
<br>";
//Aca hice lo de la cantidad de caracteres por cada string
$first_name= "Juan";
$last_name = "Segui";
echo $first_name." ". strlen($first_name)."<br>";
echo $last_name." ". strlen($last_name)."<br>";
echo "7: Escriba en PHP un código que use el operador incremental 
(++) y la multiplicación combinada (*=) para imprimir los números 
del 1 al 5. <br>
";
//siclo for
for ($x = 0 ; $x <= 5 ; $x++ ) {

    echo $x *= 2;
    "<br>";

};
echo "<br>";
echo "8: Agregue comentarios a los programas anteriores sobre
 lo que hizo en cada ejercicio. 
 Trate de usar comentarios de una linea y de párrafo. 
 Después de agregar los comentarios, ejecute las páginas 
 nuevamente para verificar su correcto funcionamiento.<br>"


?>