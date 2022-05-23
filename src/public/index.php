<?php
header('Content-type: application/json');
require_once dirname(dirname(__FILE__)).'\controller\EncuestaController.php';
$order = new EncuestaController();
$data  = json_decode(file_get_contents('php://input'), true);

die($order->store($data));





