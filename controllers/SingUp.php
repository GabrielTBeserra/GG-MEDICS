<?php

require_once '../models/insert_pacient.php';
require_once '../models/insert_medic.php';


$sexo = $_POST['sexo'];
$tipoDiabete = $_POST['tipoDiabete'];
$hipertenso = $_POST['hiper'] ? true : false;

$name = $_POST['name'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$password = $_POST['password'];
$medic = isset($_POST['medic']) ? true : false;
$dataNasc = isset($_POST['data']) ? $_POST['data'] : false;


$newRegister = new SingUp($name, $email, $cpf, $password, $medic, $dataNasc, $sexo, $tipoDiabete, $hipertenso);
$newRegister->register();



class SingUp
{
    private $nome;
    private $email;
    private $cpf;
    private $password;
    private $isMedic;
    private $tipoDiabete;
    private $sexo;
    private $hipertenso;
    private $dataNasc;

    public function __construct($nome, $email, $cpf, $password, $isMedic, $dataNasc, $sexo, $tipoDiabete, $hipertenso)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->password = $password;
        $this->isMedic = $isMedic;
        $this->dataNasc = $dataNasc;
        $this->hipertenso = $hipertenso;
        $this->tipoDiabete = $tipoDiabete;
        $this->sexo = $sexo;
    }

    public function register()
    {
        if ($this->isMedic) {
            new InsertMedic($this->nome, $this->sexo, $this->password, $this->email, 'medico', $this->cpf);
        } else {
            new InsertPacient($this->nome,  $this->sexo, $this->password, $this->email, 'paciente', $this->cpf, $this->dataNasc, $this->tipoDiabete, $this->hipertenso);
        }
    }
}
