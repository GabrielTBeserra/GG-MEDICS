<?php

require_once '../models/ChangeInfo.php';

$email = $_POST['email'];

session_start();

$novoEmail = new Change();
$novoEmail->email($_SESSION['idUser'] , $email);

