<?php
//Hash table
$personaje = array(
    "Nombre" => "Pablo",
    "Apellido" => "Garcia",
    "Puesto" => "Gerente",
    "Edad" => "30",
    "Poder" => "Volar"
);
$personaje = array(
    array(
        "Nombre" => "Pablo",
        "Apellido" => "Garcia",
        "Puesto" => "Gerente",
        "Edad" => "30",
        "Poder" => "Volar"
    ),
    array(
    "Nombre" => "Ana",
    "Apellido" => "Perez",
    "Puesto" => "Directora",
    "Edad" => "33",
    "Poder" => "Saltar",),
    array(
        "Nombre" => "Jorge",
        "Apellido" => "Lopez",
        "Puesto" => "Policia",
        "Edad" => "40",
        "Poder" => "Fuego"
    )

);
print_r($personaje);
?>