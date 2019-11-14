<?php

require_once 'ConnectionDB.php';

session_start();

$idPat = $_POST['idPat'];


$insertNew = new InsertAcom($idPat, $_SESSION['idUser']);
$insertNew->insert();

class InsertAcom
{
    private $connection;
    private $idPat;
    private $idMed;

    public function __construct($idPat, $idMed)
    {
        $this->idMed = $idMed;
        $this->idPat = $idPat;
        $conn = new Connection();
        $this->connection = $conn->db();
        if (mysqli_connect_errno()) {
            echo "Connect failed: %s\n" . mysqli_connect_error();
            exit();
        }
    }

    public function insert()
    {
        if (!$this->connection->query("INSERT INTO acompanhamento (idMedico , idPaciente) VALUES ('$this->idMed' , '$this->idPat')")) {
            echo $this->connection->error;
        }

        $this->connection->close();
    }
}
