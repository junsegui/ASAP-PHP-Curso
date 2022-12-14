<?PHP
include "fruta.php";
class Frutilla extends Fruta
{
    public function enviarMensaje(){
        echo "soy una frutilla";
        echo $this-> color;
    }
    function contar(){
        echo "contando frutillas";  
    }
}
    

?>