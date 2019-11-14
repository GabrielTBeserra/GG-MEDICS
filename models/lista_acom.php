<?php

require_once 'ConnectionDB.php';




class ListaAcom{
    private $idMed;
    private $connection;

    public function __construct($idMed)
    {
        $this->idMed = $idMed;
        $con = new Connection();
        $this->connection = $con->db();

        if (mysqli_connect_errno()) {
            echo "Connect failed: %s\n" . mysqli_connect_error();
            exit();
        }
    }

    public function lista(){


        $query = "SELECT * FROM acompanhamento where idMedico = '$this->idMed'";
        // Select records


        $result = $this->connection->query($query);



        $items = '';
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $idUs = $row['idPaciente'];
                $query2 = "SELECT u.idUsuario , u.nome, p.cpfPaciente FROM usuario u , paciente p where (u.idUsuario = '$idUs') AND (p.idUsuario = '$idUs')";
                $result2 = $this->connection->query($query2);

                echo $query2;

                if ($result2) {
                    while ($row2 = $result2->fetch_assoc()) {
                        $item = file_get_contents('view/Pages/acom_item.html');
                        $item = str_replace('#{acom.id}',$idUs, $item);
                        $item = str_replace('#{acom.nome}', $row2['nome'], $item);
                        $item = str_replace('#{acom.cpf}', $row2['cpfPaciente'], $item);
                        $items .= $item;
                    }
                }





            }
        }

        $this->connection->close();
        return $items;
    }
}