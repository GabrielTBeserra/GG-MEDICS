<?php


$data = $_POST['data'];
$horario = $_POST['horario'];
$valor = $_POST['valor'];

$dateStr = $data . " " . $horario;

$timestamp = strtotime($dateStr);
$datetime = date('Y-m-d H:i:s', $timestamp);

echo $datetime;

session_start();

echo "<script>console.log('Debug Objects: " . $dateStr . "' );</script>";


new InserirDiabetes($datetime, $valor, $_SESSION['idUser']);



class InserirDiabetes
{
    public function __construct($data, $valor, $id)
    {
        $conn = mysqli_connect("localhost", "root", "", "web");

        if (mysqli_connect_errno()) {
            echo "Connect failed: %s\n" . mysqli_connect_error();
            exit();
        }


        if (!$conn->query("INSERT INTO diabetes (idPaciente , valorMedido , dataMedicao) VALUES ('$id' , '$valor' , '$data')")) {
            echo $conn->error;
        };



        $conn->close();
        header("location: /Web");
    }
}
