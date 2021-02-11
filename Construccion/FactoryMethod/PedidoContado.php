<?php


namespace factoryMethod;

require_once "../../Herramientas.php";
require_once "Pedido.php";

class PedidoContado extends Pedido
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
        \Herramientas::println('El pago del pedido a crédito de: ' .
            number_format($this->cantidad, 2, ',', ' ') . ' se ha realizado.');
    }

   
    public function pago()
    {
        return ($this->cantidad >= 1000.0) && ($this->cantidad <= 5000.0);
    }
}