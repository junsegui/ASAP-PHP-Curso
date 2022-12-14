<?PHP
    abstract class BebidaCaliente{
        //?metodo tempate
    function prepararReceta()
    {
        $this->calentarAgua();
        $this->mezclar();
        $this->servirEnTaza();
        $this->agregarCondimentos();
    }
        function calentarAgua()
        {
            print "estoy calentado agua";
        }
        function servirEnTaza()
        {
            print "Estoy sirviendo el agua en una taza";
        }
    
    //*Metodos abstractos
    abstract function mezclar();
    abstract function agregarCondimentos();
    }
    class Te extends BebidaCaliente{
        public function mezclar()
        {
        print "Estoy colocando el squito de te";
        }
        public function agregarCondimentos()
        {
        print "Estoy colocando limon";
        }
    }
$testTe = new Te();
$testTe->prepararReceta();
?>