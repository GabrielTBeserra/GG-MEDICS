<?php

require_once 'models/lista_diabete.php';
require_once 'models/lista_pressao.php';

class IndexView
{
    public function render($isMedic, $session)
    {
        $lista_diabete = new ListaDiabete($session['idUser']);
        $lista_pressao = new ListaPressao($session['idUser']);

        if ($isMedic == "false") {
            $html = file_get_contents('view/Pages/index_patient.php');
            $html = str_replace('#{nome.paciente}', $session['name'], $html);
            $html = str_replace('#{itens.diabete}', $lista_diabete->lista(), $html);
            $html = str_replace('#{itens.pressao}', $lista_pressao->lista(), $html);
        } else {
            $html = file_get_contents('view/Pages/index_medic.php');
        }
        print $html;
    }
}
