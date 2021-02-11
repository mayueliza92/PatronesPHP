<?php


namespace Singleton;

require_once "../prototype/Documentacion.php";

class DocumentacionEnBlanco extends Documentacion
{
    /**
     * @var DocumentacionEnBlanco
     */
    private static $_instance = null;

    private function __construct()
    {
        $this->documentos = new \ArrayObject();
    }

    /**
     *
     * @return DocumentacionEnBlanco
     */
    public static function Instance()
    {
        if (!isset(DocumentacionEnBlanco::$_instance))
        {
            DocumentacionEnBlanco::$_instance = new DocumentacionEnBlanco();
        }
        return DocumentacionEnBlanco::$_instance;
    }

}