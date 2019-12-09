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
        // Verifica se quem esta solicitando realmente e um medico
        if ($_SESSION['isMedic'] == "true") {
            $getName = new Patient();
            // Pega os dados do paciente para montar seu perfil a ser exibido para o medico
            $userData = $getName->getPatient($this->id)[0];

            // Pega os dados de diabetes e pressao do paciente que sera visualizado
            $lista_diabete = new ListaDiabete($this->id);
            $lista_pressao = new ListaPressao($this->id);

            $diabeteInfo = $lista_diabete->lista();
            $hiperInfo = $lista_pressao->lista();

            $press = $hiperInfo['hipertenso'] == 1 ? "Hipertenso" : "Nao hipertenso";

            list($ano, $mes, $dia) = explode('-', $hiperInfo['dataNascimento']);

            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);

            $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

            $date = new DateTime($hiperInfo['dataNascimento']);
            $dataNasc = $date->format('d/m/Y');


            $search = new ViewProfile();

            // Envia todas informacoes necessarias para a view
            $search->render($this->id, $userData['nome'], $diabeteInfo['tipoDiabete'], $press, $dataNasc, $idade);
        } else {
            header("location: /Web");
        }
    }
}
