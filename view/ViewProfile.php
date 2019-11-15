<?php
require_once 'models/lista_diabete.php';
require_once 'models/lista_pressao.php';

class ViewProfile
{
    public function render($id)
    {
        $lista_diabete = new ListaDiabete($id);
        $lista_pressao = new ListaPressao($id);




        $html = file_get_contents('view/Pages/view_profile.php');
        $html = str_replace('#{itens.diabete}', $lista_diabete->lista(), $html);
        $html = str_replace('#{itens.pressao}', $lista_pressao->lista(), $html);

        print $html;
    }
}
