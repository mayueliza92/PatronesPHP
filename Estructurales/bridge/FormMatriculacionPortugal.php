<?php


namespace Bridge;

require_once "FormularioMatriculacion.php";

class FormMatriculacionPortugal extends FormularioMatriculacion
{
    const NUM_CARACTERES = 6;

    /**
     * @param FormularioImpl $implantacion
     */
    public function __construct(FormularioImpl $implantacion)
    {
        parent::__construct($implantacion);
    }

    protected function controlaZona($matricula)
    {
        return strlen($matricula) == FormMatriculacionPortugal::NUM_CARACTERES;
    }

    protected function getLimite()
    {
        return FormMatriculacionPortugal::NUM_CARACTERES . ' car.';  
    }
}