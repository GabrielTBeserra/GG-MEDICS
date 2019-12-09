<?php

// Insere um novo registro de pressao para aquele usuario em questao

require_once '../models/Patient.php';

$data = $_POST['data_press'];
$horario = $_POST['horario_press'];
$sistolico = $_POST['sistolico_press'];
$diastolico = $_POST['diastolico_press'];

$dateStr = $data . " " . $horario;

$timestamp = strtotime($dateStr);
$datetime = date('Y-m-d H:i:s', $timestamp);

echo $datetime;

session_start();

$novaPressao = new Patient();
$novaPressao->InserirPressao($datetime, $sistolico, $diastolico, $_SESSION['idUser']);

header("location: /Web");
