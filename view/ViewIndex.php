<?php

require_once 'models/lista_diabete.php';
require_once 'models/lista_pressao.php';
require_once 'models/lista_acom.php';

class IndexView
{
    public function render($session)
    {
        $lista_diabete = new ListaDiabete($session['idUser']);
        $lista_pressao = new ListaPressao($session['idUser']);

        
            $html = file_get_contents('view/Pages/index_patient.php');
            $html = str_replace('#{nome.paciente}', $session['name'], $html);
            $html = str_replace('#{itens.diabete}', $lista_diabete->lista(), $html);
            $html = str_replace('#{itens.pressao}', $lista_pressao->lista(), $html);
        
        print $html;
    }
}
