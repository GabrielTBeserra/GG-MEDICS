<?php

require_once 'models/Patient.php';
require_once 'models/lista_diabete.php';
require_once 'models/lista_pressao.php';



// A view muda os campos selecionado pelo dados recebidos para realizar a exibicao
class ViewProfile
{
    public function render($id, $nome, $diabete, $hipertenso, $data, $idade)
    {

        $html = file_get_contents('view/Pages/view_profile.php');

        $html = str_replace('#{nome.paciente}', $nome, $html);
        $html = str_replace('#{diabete.paciente}', $diabete, $html);
        $html = str_replace('#{hipertenso.paciente}', $hipertenso, $html);
        $html = str_replace('#{dataNasci.paciente}', $data, $html);
        $html = str_replace('#{idade.paciente}', $idade, $html);

        print $html;
    }
}
