<?php

$id = $_GET['id'];

include_once "controllers/ViewController.php";

$search = new View($id);
$search->render();
