<?PHP
    abstract class MiClaseAbstracta{
    var $valor;//visibilidad de paquete
    const DATO = "algo";
    //metodos abstractos sin {} sin codigo
    abstract protected function getValor();//metodo de tipo rutina
    abstract function saludar($saludo): string;//metodo de tipo funcion con return
    //metodos concretos
    public function imprimir(){
        print "abstarcto";
    }
    }

    
?>