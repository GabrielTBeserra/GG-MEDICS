<?php

require_once '../models/Patient.php';

session_start();

// Devolve um array com os niveis de pressao do paciente selecionado

$id = isset($_POST['id']) ? $_POST['id'] : $_SESSION['idUser'];


$niveis = new Patient();
$niveis->niveisPressao($id);
