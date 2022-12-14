<?PHP
class Cuenta implements ITransferible
{
    public $nroDeCuenta;
    public $saldo;
    public $cliente;
    function __construct($nroDeCuenta, $saldo,)
    {
        $this->$nroDeCuenta = $nroDeCuenta;
        $this->$saldo = $saldo;
    }
    function obtenerSaldo()
    {
        return $this->saldo;
    }
    public function depositar($cant)
    {
        return $this->saldo += $cant;
    }
    public function extraer($cant)
    {
        return $this->saldo -= $cant;
    }
    public function mover($cant, $nroCta)
    {
    }
}

class Cliente
{
    public $legajo;
    public $nombre;
    public $apellido;
    public $cuenta;
    function __construct($legajo, $nombre, $apellido, $nroDeCuenta, $saldo,)
    {
        $this->cuenta = new Cuenta($nroDeCuenta, $saldo);
        $this->legajo = $legajo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    function obtenerNombre()
    {
        return $this->nombre;
    }
    function obtenerApellido()
    {
        return $this->apellido;
    }
}
$juan = new Cliente(12, "juan", "segui", 123, 32);

print_r($juan->cuenta);
class CuentaCorriente extends Cuenta
{
    public $ultimoCheque;
    function __construct($ultimoCheque, $nroCuenta, $saldo)
    {
        $this->ultimoCheque = $ultimoCheque;
        parent::__construct($nroCuenta, $saldo);
    }
    function ObtenerUltimoNroCheque()
    {
        return $this->ultimoCheque;
    }
}
class CajaDeAhorro extends Cuenta
{
    public $cajaDeAhorro;
    public function __construct($cajaDeAhorro, $saldo, $nroDeCuenta)
    {
        $this->cajaDeAhorro = $cajaDeAhorro;
        parent::__construct($nroDeCuenta, $saldo);
    }
}
interface ITransferible
{
    public function depositar($cant);
    public function extraer($cant);
    public function mover($cant, $nroCta);
}
$juan = new Cuenta(123, 50);
$marcelo = new Cuenta(122, 35);