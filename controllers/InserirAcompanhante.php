<?php

require_once '../models/Patient.php';

session_start();

$idPat = $_POST['idPat'];


// Insere um novo acompanhante para o medico em questao

$insertNew = new Patient();
$insertNew->inserirAcompanhamento($idPat, $_SESSION['idUser']);
