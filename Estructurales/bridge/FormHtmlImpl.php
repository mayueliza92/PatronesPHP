<?php


namespace Bridge;

require_once "../../Herramientas.php";
require_once "FormularioImpl.php";

class FormHtmlImpl implements FormularioImpl
{
    public function dibujaTexto($texto)
    {
        \Herramientas::println("HTML: $texto");
    }

    public function administraZonaIndicada()
    {
        return \Herramientas::readln();
    }
}