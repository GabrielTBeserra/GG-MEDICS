<?php

class ProfilePatient
{
    public function render($session)
    {  
        $html = file_get_contents('view/Pages/profile_normal.php');
        $html = str_replace('#{nome.paciente}', $session['name'], $html);
        $html = str_replace('#{cpf.paciente}', $session['cpf'], $html);
        $html = str_replace('#{email.paciente}', $session['email'], $html);
        $html = str_replace('#{dataNasc.paciente}', $session['dataNasc'], $html);
        $html = str_replace('#{sexo.paciente}', $session['sexo']  == "m" ? "Masculino" : "Feminino", $html);
        $html = str_replace('#{diabete.paciente}' , $session['tipoDiabete'] , $html);
        $html = str_replace('#{hiper.paciente}', $session['hipertenso'] == 1 ? "Hipertenso" : "Nao hipertenso", $html);

        print $html;
    }
}
