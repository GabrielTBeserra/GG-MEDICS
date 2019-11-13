<?php


class InsertMedic
{
    public function __construct($nome, $sexo, $senha, $email, $tipo, $crm)
    {
        $conn = mysqli_connect("localhost", "root", "", "web");

        if (mysqli_connect_errno()) {
            echo "Connect failed: %s\n" . mysqli_connect_error();
            exit();
        }

        if ($conn->query("INSERT INTO usuario (nome , sexo , senha , email , tipo) VALUES ('$nome', '$sexo', '$senha', '$email', '$tipo')")) {
            if (!$conn->query("INSERT INTO medico (idUsuario , crm) VALUES ('$conn->insert_id', '$crm')")) {
                echo $conn->error;
            };
        } else {
            echo $conn->error;
        };

        $conn->close();

        header("Location: /Web");
    }
}
