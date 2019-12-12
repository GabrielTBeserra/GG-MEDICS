<?php

require_once '../models/ChangeInfo.php';

$senha = $_POST['senha'];

session_start();

$novaSenha = new Change();
$novaSenha->password($_SESSION['idUser'] , $senha);