<?PHP
include "objetoPrueba.php";
$frutilla = new Fruta("frutilla","rojo",4,[[],[1,23,4]],1.4);
print_r($frutilla);
echo "<br>";
print $frutilla->hi() . "<br>";

class MyClass {
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE;

echo MyClass::CONST_VALUE;

?>