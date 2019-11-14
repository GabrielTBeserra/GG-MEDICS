<?php


class SearchIndex
{
    public function render($session)
    {

            $html = file_get_contents('view/Pages/search_patient.php');
            $html = str_replace('#{nome.paciente}', $session['name'], $html);
            $html = str_replace('#{email.paciente}', $session['email'], $html);
            $html = str_replace('#{crm.paciente}', $session['crm'], $html);
            $html = str_replace('#{sexo.paciente}', $session['sexo']  == "m" ? "Masculino" : "Feminino", $html);

            print $html;
    }
}