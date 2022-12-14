<?PHP
require "animal.php";
    interface IComportamientoAnimal{
    public function hacerRuido();
    }
    class Gato implements IComportamientoAnimal{
        public function hacerRuido()
        {
        echo "Miau";
        }
    }
$animal = new Gato();
$animal->hacerRuido();

?>