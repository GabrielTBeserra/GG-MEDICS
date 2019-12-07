<?php

require_once 'models/lista_diabete.php';
require_once 'models/lista_pressao.php';
require_once 'models/lista_acom.php';


// Carrega a pagina principal do medico
class IndexMedic {
    public function render($session)
    {
        
        $lista_acom = new ListaAcom($session['idUser']);

        
            $html = file_get_contents('view/Pages/index_medic.php');
            $html = str_replace('#{nome.paciente}', $session['name'], $html);
            $html = str_replace('#{itens.acom}', $lista_acom->lista(), $html);

        
        print $html;
    }
}