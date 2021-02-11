<?php


namespace Singleton;

require_once "../builder/Vendedor.php";
require_once "Comercial.php";

function muestra()
{
    $elComercial = Comercial::Instance();
    $elComercial->muestra();
}

// inicialización del comercial del sistema
$elComercial = Comercial::Instance();
$elComercial->setNombre("Comercial Auto");
$elComercial->setDireccion("Madrid");
$elComercial->setEmail("comercial@comerciales.com");
// muestra al comercial del sistema
muestra();