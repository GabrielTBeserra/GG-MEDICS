<?php



require_once 'ConnectionDB.php';

class ListaPacientes
{
    private $connection;
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function search()
    {


        $conn = new Connection();
        $this->connection = $conn->db();


        if (mysqli_connect_errno()) {
            echo "Connect failed: %s\n" . mysqli_connect_error();
            exit();
        }

        
        $query = "SELECT * FROM diabetes where idPaciente = '$this->id'";

        $result = $this->connection->query($query);

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
