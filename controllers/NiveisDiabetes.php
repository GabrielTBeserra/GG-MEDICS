<?php

require_once '../models/Patient.php';

session_start();

$id = isset($_POST['id']) ? $_POST['id'] : $_SESSION['idUser'];

$niveis = new Patient();
$niveis->niveisDiabete($id);
