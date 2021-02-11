<?php


namespace factoryMethod;

require_once "Cliente.php";
require_once "PedidoCredito.php";

class ClienteCredito extends Cliente
{

    /**
     * @param double $cantidad
     * @return Pedido
     */
    protected function creaPedido($cantidad)
    {
        return new PedidoCredito($cantidad);
    }
}