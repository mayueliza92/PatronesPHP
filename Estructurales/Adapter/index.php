<?php


namespace Adapter;

require_once '../../Herramientas.php';  
require_once 'DocumentoHtml.php'; 
require_once 'DocumentoPdf.php'; 
  
$documento1 = new DocumentoHtml(); 
$documento1->setContenido('Hello'); 
$documento1->dibuja(); 
 
//Herramientas::println(); 
 
$documento2 = new DocumentoPdf(); 
$documento2->setContenido('Hola'); 
$documento2->dibuja(); 