<?php

require_once '../models/Patient.php';

session_start();

$niveis = new Patient();
$niveis->niveisPressao($_SESSION['idUser']);
