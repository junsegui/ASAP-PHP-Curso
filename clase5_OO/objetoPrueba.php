<?PHP
    class Fruta{
    public $name;
    public $color;
    public $peso;
    public $array;
    public $object;
    function __construct($name,$color,$peso,$array,$object)
    {
        $this->name = $name;
        $this->color = $color;
        $this->peso = $peso;
        $this->array = $array;
        $this->objeto = $object;
    }
    function hi (){
        echo "soy una $this->color y estoy probando un string";
    }
    }
?>