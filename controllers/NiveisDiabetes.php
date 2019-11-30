<?php

require_once '../models/Patient.php';

session_start();

$niveis = new Patient();
$niveis->niveisDiabete($_SESSION['idUser']);
