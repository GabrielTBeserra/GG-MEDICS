<?php

require_once 'view/ProfileMedic.php';
require_once 'view/ProfilePatient.php';
require_once 'view/Login.php';

session_start();

// Carrega o perfil relacionado ao tipo de usuario
class Profile
{
    public function index()
    {
        if ((isset($_SESSION['idUser']) == true)) {
            if ($_SESSION['isMedic'] == "true") {
                $view = new ProfileMedic();
                $view->render($_SESSION);
            } else {
                $view = new ProfilePatient();
                $view->render($_SESSION);
            }
        } else {
            $login = new LoginView();
            $login->render();
        }
    }
}
