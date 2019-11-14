<?php

require_once 'ConnectionDB.php';

$data = $_POST['data_dia'];
$horario = $_POST['horario_dia'];
$valor = $_POST['valor_dia'];

$dateStr = $data . " " . $horario;

$timestamp = strtotime($dateStr);
$datetime = date('Y-m-d H:i:s', $timestamp);

session_start();

if (!($data . trim("") == "" || $horario . trim("") == "" || $valor . trim("") == "")) {
    new InserirDiabetes($datetime, $valor, $_SESSION['idUser']);
}

header("location: /Web");

class InserirDiabetes
{
    private $connection;
    public function __construct($data, $valor, $id)
    {

        $con = new Connection();
        $this->connection = $con->db();

        if (mysqli_connect_errno()) {
            echo "Connect failed: %s\n" . mysqli_connect_error();
            exit();
        }

        if (!$this->connection->query("INSERT INTO diabetes (idPaciente , valorMedido , dataMedicao) VALUES ('$id' , '$valor' , '$data')")) {
            echo $this->connection->error;
        };

        $this->connection->close();
        header("location: /Web");
    }
}
