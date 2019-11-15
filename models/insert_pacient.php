<?php

require_once 'ConnectionDB.php';

class InsertPacient
{
    public function __construct($nome, $sexo, $senha, $email, $tipo, $cpf, $dataNasc, $tipoDia, $hiper)
    {
        $conns = new Connection();
        $conn = $conns->db();

        if (mysqli_connect_errno()) {
            echo "Connect failed: %s\n" . mysqli_connect_error();
            exit();
        }




        if ($conn->query("INSERT INTO usuario (nome , sexo , senha , email , tipo) VALUES ('$nome', '$sexo', '$senha', '$email', '$tipo')")) {
            if (!$conn->query("INSERT INTO paciente (idUsuario , cpfPaciente , dataNascimento , tipoDiabete , hipertenso) VALUES ('$conn->insert_id', '$cpf', '$dataNasc' , '$tipoDia' , '$hiper')")) {
                echo $conn->errno;
            };
        } else {
            echo $conn->errno;
        };

        $conn->close();
    }
}
