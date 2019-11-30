<?php

require_once '../models/Patient.php';

session_start();

$idPat = $_POST['idPat'];


$insertNew = new Patient();
$insertNew->inserirAcompanhamento($idPat, $_SESSION['idUser']);