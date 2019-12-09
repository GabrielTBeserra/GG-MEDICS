<?php


require_once '../models/select_patient.php';

// responsavel por popular a lista com todos paciente disponiveis e acordo com a busca

session_start();

$termo = $_POST['termo'];
$idMed = $_SESSION['idUser'];

$search = new ListaPacientes($termo, $idMed);
$search->search();
