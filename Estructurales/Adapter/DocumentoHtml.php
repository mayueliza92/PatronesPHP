<?php


namespace Adapter;

use Adapter\Documento;

require_once "Documento.php";
require_once "../../Herramientas.php";

class DocumentoHtml implements Documento
{
    /**
     * @var string
     */
    protected $contenido;

    /**
     * @param string $contenido
     */
    public function setContenido ($contenido)
    {
        $this->contenido = $contenido;
    }

    public function dibuja()
    {
        \Herramientas::println("Dibuja documento HTML: $this->contenido");
    }

    public function imprime()
    {
        \Herramientas::println("Imprime documento HTML: $this->contenido");
    }
}