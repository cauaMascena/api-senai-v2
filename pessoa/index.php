<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Content-type: application/json");

include('../Connection.php');
include('../model/ModelPessoa.php');
include('../controller/ControllerPessoa.php');

$conn = new Connection();
$model = new ModelPessoa($conn->returnConnection());
$controller = new ControllerPessoa($model);

$dados = $controller->router();

// echo $dados;exit;

echo json_encode(array("status"=>"Success", "data"=>$dados));


?>