<?php

require_once 'ConnectionDB.php';


$data = $_POST['data_press'];
$horario = $_POST['horario_press'];
$sistolico = $_POST['sistolico_press'];
$diastolico = $_POST['diastolico_press'];

$dateStr = $data . " " . $horario;

$timestamp = strtotime($dateStr);
$datetime = date('Y-m-d H:i:s', $timestamp);

echo $datetime;

session_start();

echo "<script>console.log('Debug Objects: " . $dateStr . "' );</script>";


new InserirPressao($datetime, $sistolico, $diastolico, $_SESSION['idUser']);



class InserirPressao
{
    private $connection;
    public function __construct($data, $sis, $dias, $id)
    {
        $conn = new Connection();
        $this->connection = $conn->db();

        if (mysqli_connect_errno()) {
            echo "Connect failed: %s\n" . mysqli_connect_error();
            exit();
        }


        if (!$this->connection->query("INSERT INTO pressao (idPaciente , valorSistolico , valorDiastolico , dataMedicao) VALUES ('$id' , '$sis' , '$dias' , '$data')")) {
            echo $this->connection->error;
        };



        $this->connection->close();
        header("location: /Web");
    }
}
