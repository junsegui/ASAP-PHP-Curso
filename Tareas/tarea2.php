<?PHP
echo "5:Calcular la edad de 5 personas, donde el año de nacimiento es calculado con RANDOM (rand)
    tip:
    chequear la fecha de la maquina
    calcular el valor de año de nacimiento aleatorio
    y lo repiten 5 veces, usar FOR, y ver con el WHILE lo mismo. <br>";
    $randomYear=rand($min = 1920,2022);
function calculateAge($year)
{
    return 2022 - $year;
}
$edadFinal = calculateAge($randomYear);
echo "La edad es de $edadFinal en total."."<br>";
echo "2:Calcular el área de un círculo y de un cuadrado
tip:
definir PI como constante (3.1416) → el circulo
PI* radio2
usar la función POW
lado * lado
valores para radio y lados, que sean aleatorios. <br>";

function calculateCircleArea($radio)
{
    $PI = 3.1416;
    return $PI * (pow($radio, 2));
}
function calculateSquareArea($lado)
{
    return pow($lado, 2);
}
$areaCircle = calculateCircleArea(10);
$areaSquare = calculateSquareArea(5);
echo "El area del circulo es de $areaCircle<br>";
echo "El area del cuadrado es de $areaSquare <br> ";
echo "3:Realizar una función que diga si el nro es par <br>";

function evenOrOdd($number){
    return $number % 2 == 0 ? "Par" : "Inpar";
}
$randomNumber = rand($min = 1, 100);
$resp = evenOrOdd($randomNumber);
echo "El $randomNumber es $resp <br>";
echo "4:Realizar una función que subraye un texto y lo coloque en negrita (usar el tag de html  para
underline y  para bold)<br>";
function underlineAndBold($text)
{
    return "<b><u>$text</u></b>";
}
$text = "Texto de prueba";
echo underlineAndBold($text)."<br>";
echo "5:Realizar una función que agregue un elemento al array pasado por parámetro (pasaje por
referencia)<br>";

$array = [];

array_push($array, 5);
print_r($array);
function addToArray($item,$array)
{


    array_push($array, $item);
    return $array;
}

print_r($array);
?>