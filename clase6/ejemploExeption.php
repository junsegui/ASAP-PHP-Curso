<?PHP
    //?primer caso
    function dividir($dividendo, $divisor)
    {
    return $dividendo / $divisor;
    }
    //?segundo caso
    function dividir2($dividendo, $divisor)
    {
    if($divisor<0){
        throw new Exception("La division tiene que ser > que 0");
    }
    return $dividendo / $divisor;
    }
    //?tercer caso
    function dividir3($dividendo, $divisor)
    {
        if($divisor<0){
            throw new Exception("La division tiene que ser > que 0");
        }
        try{
        print dividir3(10, 0);
        }catch(Exception $e){
        $mensaje = $e->getMessage();
        return print $mensaje;
        }
    }
print dividir3(10, 0);
?>