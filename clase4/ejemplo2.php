<?PHP
    //pasaje por valor
    // viaja el dato crudo
    function pasarPorValor($x)
    {
    return $x;
    }
    //pasaje por referencia
    //pasa la posicion de memoria donde este guardado $valor
    //pisa el valor de la constante
    function pasarPorReferencia(&$x)
    {
    return $x++;
    }
?>