<?php
include("calculadora.php");

$options = array("uri"=>"http://localhost/ServiciosWeb/Servicio/");
$server = new SoapServer(null, $options);
$server->setClass("Calculadora");
$server->handle();
?>