<?php

require_once 'view/SingUp.php';


class SingUpController
{
    public function index()
    {
        $view = new SingUpView();
        $view->render();
    }
}
