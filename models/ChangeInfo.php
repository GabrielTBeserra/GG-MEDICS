<?php


require_once 'ConnectionDB.php';

Class Change{
    private $connection;
    // Contrutor da classe, cria a conexao
    public function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->db();

        if (mysqli_connect_errno()) {
            echo "Connect failed: %s\n" . mysqli_connect_error();
            exit();
        }
    }

    public function email($id , $email){
        if ($this->connection->query("Update usuario set email = '$email' where idUsuario = '$id'")) {
            $_SESSION['email'] = $email;
        } else {
            echo $this->connection->error;
        }

        
        $this->connection->close();
    }

    public function password($id , $password){
        if (!$this->connection->query("Update usuario set senha = '$password' where idUsuario = '$id'")) {
            echo $this->connection->error;
        }

        $this->connection->close();
    }
}