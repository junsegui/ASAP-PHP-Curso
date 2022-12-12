<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>

    <?php
    /*Asi se hacen comentarios en php */
    echo "comentando php <br> y haciendo un enter <br>";
    $nombre = "Juan";
    $numero=2;
    $boolean = true;
    /*asume formato por primera carga */
    echo $nombre . "<br>";
    echo gettype($nombre)."<br>";
    $decimal = 5.5;
    echo gettype($decimal)."<br>";
    $numero1 = 1.6;
    $numero2 = (integer) $numero1;
    echo $numero2."<br>";
    ?>
    <?php
    $msjES = "Hola";
    $msjEN = "Hello";
    $LANGUAJE = "EN";
    $IDIOMA = "ES";
    $mensaje = "msjES" . $IDIOMA;
    print "En ${IDIOMA} es ${msjES}"."<br>";

    ?>
    <?php
    $nombre = "juan";
    $alias = & $nombre;
    echo "mi nombre es $nombre"."<br>";
    const VALOR = 2;
    echo "Esta es una constante: ". VALOR . "<br>";
    ?>
</body>

</html>