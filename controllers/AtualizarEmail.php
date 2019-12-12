<?php

require_once '../models/ChangeInfo.php';

$email = $_POST['email'];

session_start();

$novaSenha = new Change();
$novaSenha->email($_SESSION['idUser'] , $email);

