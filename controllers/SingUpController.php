<?php

require_once 'view/SingUp.php';

// cria a tela de cadastro
class SingUpController
{
    public function index()
    {
        $view = new SingUpView();
        $view->render();
    }
}
