<?PHP
//un  objeto tipico llamado VALUE OBJECTS
    class Fruta{
        //propiedades-atributos
        public $name;
    public $color;
    //methods-comportamiento
    //los setter son de escritura
    //metodos constructores
    function __construct($name){
        $this->name = $name;
    }
    
        
    
    function setName($name)
    {
        $this->$name = $name;
    }
    function setColor($color)
    {
        $this->color = $color;
    }
    //los getters son de escritura
    function getName()
    {
        return $this->name;
    }
    }
?>