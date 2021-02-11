<?php


namespace factoryMethod;

require_once "Cliente.php";
require_once "PedidoContado.php";

class ClienteContado extends Cliente
{

    /**
     * @param double $cantidad
     * @return Pedido
     */
    protected function creaPedido($cantidad)
    {
        return new PedidoContado($cantidad);
    }
}