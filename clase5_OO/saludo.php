<?PHP
    class Saludo
    {
        public static function bienvenido()
        {
        print "Hola mundo";
        }

    }
Saludo::bienvenido();
$hola = new Saludo();
$hola->bienvenido();
?>