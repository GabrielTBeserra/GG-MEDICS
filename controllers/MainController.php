<?php

require_once 'view/ViewIndex.php';
require_once 'view/ViewMedic.php';
require_once 'view/Login.php';

session_start();
// Faz a chamada do index relacionado ao tipo de registro
class Main
{
    public function index()
    {
        if ((isset($_SESSION['idUser']) == true)) {
            if($_SESSION['isMedic'] == "true"){
                $view = new IndexMedic();
                $view->render($_SESSION);
            } else {
                $view = new IndexView();
                $view->render($_SESSION);
            }
        } else {
            $login = new LoginView();
            $login->render();
        }
    }
}
