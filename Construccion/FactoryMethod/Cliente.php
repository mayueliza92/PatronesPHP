<?php


namespace factoryMethod;


abstract class Cliente
{
    /**
     * @var "Lista de pedidos"
     */
    protected $pedidos = array();

    /**
     * @param double $cantidad
     * @return Pedido
     */
    protected abstract function creaPedido($cantidad);

    /**
     * @param double $cantidad
     */
    public function nuevoPedido($cantidad)
    {
        $pedido = $this->creaPedido($cantidad);
        if ($pedido->valida())
        {
            $pedido->pago();
            $this->pedidos [] = $pedido;
        }
    }
}