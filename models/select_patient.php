<?php

require_once 'ConnectionDB.php';


class ListaPacientes
{
    private $connection;
    private $termo;
    private $idMed;

    public function __construct($termo, $idMed)
    {
        $this->termo = $termo;
        $this->idMed = $idMed;
    }

    public function search()
    {


        $conn = new Connection();
        $this->connection = $conn->db();


        if (mysqli_connect_errno()) {
            echo "Connect failed: %s\n" . mysqli_connect_error();
            exit();
        }

        $result = $this->connection->query("SELECT u.idUsuario , u.nome , p.cpfPaciente FROM usuario u , paciente p where (u.idUsuario like '$this->termo' OR LOWER(u.nome) like '$this->termo') AND (tipo like 'paciente') and ((select count(*) from acompanhamento where idPaciente = u.idUsuario and idMedico = '$this->idMed') = 0) AND p.idUsuario = u.idUsuario");

        $rows = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }

        //print_r($rows);

        echo json_encode($rows);

        $this->connection->close();
    }
}
