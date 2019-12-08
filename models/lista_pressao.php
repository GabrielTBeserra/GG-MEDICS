<?php

require_once 'ConnectionDB.php';

class ListaPressao
{
    private $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function lista()
    {
        $conns = new Connection();
        $conn = $conns->db();
        // Check connection
        if ($conn->connect_errno) {
            echo "Failed to connect to MySQL: " . $conn->connect_error();
        }
        // Defines query
        $query = "SELECT * FROM paciente where idUsuario = '$this->id'";
        // Select records
        $result = $conn->query($query);



        $items;
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $items = $row;
            }
            
        }



        // Close connection
        $conn->close();
        return $items;
    }
}
