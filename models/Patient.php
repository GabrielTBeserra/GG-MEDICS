<?php


require_once 'ConnectionDB.php';


Class Patient {
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

    public function InserirDiabetes($data, $valor, $id)
    {

        if (!$this->connection->query("INSERT INTO diabetes (idPaciente , valorMedido , dataMedicao) VALUES ('$id' , '$valor' , '$data')")) {
            echo $this->connection->error;
        };

        $this->connection->close();
    }
    
    public function inserirPressao($data, $sis, $dias, $id)
    {

        if (!$this->connection->query("INSERT INTO pressao (idPaciente , valorSistolico , valorDiastolico , dataMedicao) VALUES ('$id' , '$sis' , '$dias' , '$data')")) {
            echo $this->connection->error;
        };


        $this->connection->close();
    }

    public function inserir($nome, $sexo, $senha, $email, $tipo, $cpf, $dataNasc, $tipoDia, $hiper)
    {
        if ($this->connection->query("INSERT INTO usuario (nome , sexo , senha , email , tipo) VALUES ('$nome', '$sexo', '$senha', '$email', '$tipo')")) {
            $id = $this->connection;
            if (!$this->connection->query("INSERT INTO paciente (idUsuario , cpfPaciente , dataNascimento , tipoDiabete , hipertenso) VALUES ('$id->insert_id', '$cpf', '$dataNasc' , '$tipoDia' , '$hiper')")) {
                echo $this->connection->errno;
            };
        } else {
            echo $this->connection->errno;
        };

        $this->connection->close();
    }

    public function inserirAcompanhamento($idPat, $idMed)
    {
        if (!$this->connection->query("INSERT INTO acompanhamento (idMedico , idPaciente) VALUES ('$idMed' , '$idPat')")) {
            echo $this->connection->error;
        }

        $this->connection->close();
    }
}