<?PHP
class Luz
{
    public $nroDeWatts;
    public $indicador;
    public $ubicacion;
    function __construct($nroDeWats=50, $indicador=false, $ubicacion="X")
    {
        $this->nroDeWats = $nroDeWats;
        $this->indicador = $indicador;
        $this->ubicacion = $ubicacion;

    }
    function prender()
    {
        return !$this->indicador? $this->indicador = true : print "La luz esta prendida ya";
    }
    function apagar()
    {
        return $this->indicador? $this->indicador = !$this->indicador : print "La luz esta apagada ya";
    }
    function estaPrendida(){
        return $this->indicador ? print "La luz ya esta prendida" : print "La luz esta apagada, prendela";
    }
    function imprimirUbicacion(){
        return $this->ubicacion != "X" ? $this->ubicacion : print "Ubicacion no ingresada";
    }
}
class LuzTubo extends Luz {
    public $color;
    public $largoDeTubo;
    public function __construct($largoDeTubo, $color, $nroDeWats, $ubicacion, $indicador)
    {
        $this->largoDeTubo=$largoDeTubo;
        $this->color=$color;
        parent::__construct($nroDeWats, $indicador, $ubicacion);
        
    }
    function obtenerLargoTubo(){
        return print "El largo del tubo es de: ".$this->largoDeTubo;
    }
    function imprimirInfo(){
        return print "El color es: $this->color, el
largo del tubo es de: $this->largoDeTubo cm, la luz esta
$this->indicador, la luz esta ubicada en $this->ubicacion
y finalmente el numero de watts es $this->nroDeWats";
    }
    
}
class LuzBombita extends Luz
{
    public $forma;
    public function __construct($nroDeWats, $ubicacion, $indicador, $forma)
    {
        $this->forma = $forma;
        parent::__construct($nroDeWats, $indicador, $ubicacion);
    }
}
$foco = new Luz(50, false, "casa");
$foco2= new LuzTubo(30, "blanco", 50, "casa", false);
print $foco2->imprimirInfo() . "<br>";
try {
    $foco->estaPrendida();
    !$foco->indicador ? throw new Exception("Efectivamente esta apagada") : print false;

}catch(Exception $m){
    $mensaje = $m->getMessage();
    print $mensaje;
}
?>