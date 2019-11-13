<?php

class ProfileIndex
{
    public function render($isMedic, $session)
    {

        print_r($session);

        if ($isMedic == "false") {
            $html = file_get_contents('view/Pages/profile_normal.php');
            $html = str_replace('#{nome.paciente}', $session['name'], $html);
            $html = str_replace('#{cpf.paciente}', $session['cpf'], $html);
            $html = str_replace('#{email.paciente}', $session['email'], $html);
            $html = str_replace('#{dataNasc.paciente}', $session['dataNasc'], $html);
            $html = str_replace('#{sexo.paciente}', $session['sexo']  == "m" ? "Masculino" : "Feminino", $html);
        } else {
            $html = file_get_contents('view/Pages/profile_medic.php');
        }
        print $html;
    }
}
