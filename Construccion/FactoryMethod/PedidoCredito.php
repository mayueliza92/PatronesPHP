<?php


namespace factoryMethod;

require_once "../../Herramientas.php";
require_once "Pedido.php";

class PedidoCredito extends Pedido
{
    /**
     * @param double $cantidad
     */
    public function __construct($cantidad)
    {
        parent::__construct($cantidad);
    }

    /**
     * @return boolean
     */
    public function valida()
    {
        \Herramientas::println('El pago del pedido al contado de: ' .
            number_format($this->cantidad, 2, ',', ' ') . ' se ha realizado.');
    }

    /**
     * @return void
     */
    public function pago()
    {
        return true;
    }
}