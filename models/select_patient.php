<?php

require_once 'ConnectionDB.php';

$termo = $_POST['termo'];

$search = new ListaPacientes($termo);
$search->search();

class ListaPacientes
{
    private $connection;
    private $termo;
    public function __construct($termo)
    {
        $this->termo = $termo;
    }

    public function search()
    {
        $conn = new Connection();
        $this->connection = $conn->db();


        if (mysqli_connect_errno()) {
            echo "Connect failed: %s\n" . mysqli_connect_error();
            exit();
        }

        $result = $this->connection->query("SELECT u.idUsuario , u.nome FROM usuario u where (u.idUsuario like '$this->termo' OR LOWER(u.nome) like '$this->termo') AND tipo like 'paciente'");




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
