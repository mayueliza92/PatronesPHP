<?php


namespace Adapter;

require_once "Documento.php";
require_once "ComponentePdf.php";


class DocumentoPdf implements Documento
{
    /**
     * @var ComponentePdf
     */
    protected $herramientaPdf;

    public function __construct()
    {
        $this->herramientaPdf = new ComponentePdf();
    }

    /**
     *
     * @param string $contenido
     */
    public function setContenido($contenido)
    {
        $this->herramientaPdf->pdfFijaContenido($contenido);
    }

    public function dibuja()
    {
        $this->herramientaPdf->pdfPreparaVisualizacion();
        $this->herramientaPdf->pdfRefresca ();
        $this->herramientaPdf->pdfTerminaVisualizacion();
    }

    public function imprime()
    {
        $this->herramientaPdf->pdfEnviaImpresora ();
    }
}