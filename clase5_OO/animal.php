<?PHP
    abstract class Animal{
    protected $nombre;
    protected $raza;
    abstract function comer();
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setName($name)
    {
        return $this->raza = $name;
    }
    }
?>