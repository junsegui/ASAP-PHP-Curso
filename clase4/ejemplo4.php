<?PHP
$archivo = fopen("people.txt","rb");
//rb significa read begin es pararse en el principio

echo "<ul>";
for ($filas = fgets($archivo); !feof($archivo); $filas = fgets($archivo)) {
    $filas = trim($filas);
    $info = explode("|", $filas);
    echo "<li>mail to:" . $info[0] . " de " . $info[1] . "</li>";
}
echo"</ul>";
fclose($archivo);
?>