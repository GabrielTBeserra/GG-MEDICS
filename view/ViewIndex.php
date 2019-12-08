<?php

require_once 'models/lista_diabete.php';
require_once 'models/lista_pressao.php';
require_once 'models/lista_acom.php';

class IndexView
{
    public function render($session)
    {


        
            $html = file_get_contents('view/Pages/index_patient.php');
            $html = str_replace('#{nome.paciente}', $session['name'], $html);

        
        print $html;
    }
}
