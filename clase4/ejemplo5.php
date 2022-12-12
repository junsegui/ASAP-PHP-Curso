<?PHP
$nombre = "juan segui";
//encriptacion
$nombreEncriptado = md5($nombre);
echo $nombreEncriptado . "<br>";
$nombreEncriptado2 = sha1($nombre);
echo $nombreEncriptado2 . "<br>";

?>