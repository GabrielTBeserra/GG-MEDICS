<?php

// Pega o id passado pela URL e envia para o controller
$id = $_GET['id'];

include_once "controllers/ViewController.php";

$search = new View($id);
$search->render();
