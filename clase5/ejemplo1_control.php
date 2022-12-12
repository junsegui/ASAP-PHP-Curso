<?PHP

//validacion
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre = $_POST["user"];
    if(empty($nombre)){
        echo "no tipero el nombre";
    }else{
        echo "Bienvenido " . $_POST["user"] ."<br>";
        echo "su direccion es " . $_POST["dire"] . "<br>";}
}
?>