<?php


class InsertPacient
{
    public function __construct($nome, $sexo, $senha, $email, $tipo, $cpf, $dataNasc, $tipoDia, $hiper)
    {
        $conn = mysqli_connect("localhost", "root", "", "web");

        if (mysqli_connect_errno()) {
            echo "Connect failed: %s\n" . mysqli_connect_error();
            exit();
        }

        if ($conn->query("INSERT INTO usuario (nome , sexo , senha , email , tipo) VALUES ('$nome', '$sexo', '$senha', '$email', '$tipo')")) {
            if (!$conn->query("INSERT INTO paciente (idUsuario , cpfPaciente , dataNascimento , tipoDiabete , hipertenso) VALUES ('$conn->insert_id', '$cpf', '$dataNasc' , '$tipoDia' , '$hiper')")) {
                echo $conn->error;
            };
        } else {
            echo $conn->error;
        };

        $conn->close();

        header("Location: /Web");
    }
}
