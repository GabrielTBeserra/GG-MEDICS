<?php


require_once '../models/select_patient.php';


session_start();

$termo = $_POST['termo'];
$idMed = $_SESSION['idUser'];

$search = new ListaPacientes($termo, $idMed);
$search->search();