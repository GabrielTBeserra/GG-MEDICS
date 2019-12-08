<?php

require_once 'view/ViewProfile.php';

session_start();


// Responsavel em carregar o perfil de um paciente em que o medico acompanha

class View
{
    private $id;
    public function __construct($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        if ($_SESSION['isMedic'] == "true") {
            $getName = new Patient();
            $userData = $getName->getPatient($this->id)[0];

            $lista_diabete = new ListaDiabete($this->id);
            $lista_pressao = new ListaPressao($this->id);

            $diabeteInfo = $lista_diabete->lista();
            $hiperInfo = $lista_pressao->lista();

            $press = $hiperInfo['hipertenso'] == 1 ? "Hipertenso" : "Nao hipertenso";


            list($ano, $mes, $dia) = explode('-', $hiperInfo['dataNascimento']);

            // data atual
            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            // Descobre a unix timestamp da data de nascimento do fulano
            $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

            // cálculo
            $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

            $date = new DateTime($hiperInfo['dataNascimento']);
            $dataNasc = $date->format('d/m/Y');


            $search = new ViewProfile();
            $search->render($this->id , $userData['nome'] , $diabeteInfo['tipoDiabete'] , $press ,$dataNasc , $idade);
        } else {
            header("location: /Web");
        }
    }
}
