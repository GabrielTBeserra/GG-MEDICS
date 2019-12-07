<?php

require_once '../models/Patient.php';

$data = $_POST['data_dia'];
$horario = $_POST['horario_dia'];
$valor = $_POST['valor_dia'];

$dateStr = $data . " " . $horario;

$timestamp = strtotime($dateStr);
$datetime = date('Y-m-d H:i:s', $timestamp);

session_start();

if (!($data . trim("") == "" || $horario . trim("") == "" || $valor . trim("") == "")) {
    $novaDiabete = new Patient();
    $novaDiabete->InserirDiabetes($datetime, $valor, $_SESSION['idUser']);
}

header("location: /Web");