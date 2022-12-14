<?PHP

include "fruta.php";

$apple = new Fruta("manzana");
$banana = new Fruta("banana");
$apple->setName("Manzana");
$banana->setName("Banana");
echo $apple->getName();

?>