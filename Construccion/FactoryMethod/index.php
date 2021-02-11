<?php


namespace factoryMethod;

require_once 'ClienteContado.php';
require_once 'ClienteCredito.php';

$cliente = new ClienteContado();
$cliente->nuevoPedido(3000.0);
$cliente->nuevoPedido(5000.0);

$cliente = new ClienteCredito();
$cliente->nuevoPedido(20000.0);
$cliente->nuevoPedido(10000.0);
