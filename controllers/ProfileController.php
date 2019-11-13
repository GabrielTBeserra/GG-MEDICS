<?php

require_once 'view/Profile.php';
require_once 'view/Login.php';

session_start();

class Profile
{
    public function index()
    {
        if ((isset($_SESSION['idUser']) == true)) {
            $view = new ProfileIndex();
            $view->render($_SESSION['isMedic'], $_SESSION);
        } else {
            $login = new LoginView();
            $login->render();
        }
    }
}
