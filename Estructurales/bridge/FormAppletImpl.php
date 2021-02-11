<?php

namespace Bridge;

require_once "../../Herramientas.php";
require_once "FormularioImpl.php";

class FormAppletImpl implements FormularioImpl
{
    public function dibujaTexto($texto)
    {
        \Herramientas::println("Applet: $texto");
    }

    public function administraZonaIndicada()
    {
        return \Herramientas::readln();
    }
}