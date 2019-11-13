<?php

require_once 'view/ViewIndex.php';
require_once 'view/Login.php';

session_start();

class Main
{
    public function index()
    {
        if ((isset($_SESSION['idUser']) == true)) {
            $view = new IndexView();
            $view->render($_SESSION['isMedic'], $_SESSION);
        } else {
            $login = new LoginView();
            $login->render();
        }
    }
}
