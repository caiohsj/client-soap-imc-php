<?php
session_start();

$altura = $_POST["altura"];
$peso = $_POST["peso"];
$sexo = $_POST["sexo"];

$client = new SoapClient("http://localhost:8000/imcws?wsdl");


$params = [
    "getIMC" => [
        "altura" => $altura,
        "peso" => $peso
    ]
];

$result = $client->__soapCall("getIMC", $params);

$_SESSION["result"] = $result->return;

header("Location: index.php");