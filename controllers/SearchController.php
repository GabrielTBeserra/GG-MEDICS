<?php

require_once 'view/Search.php';


session_start();

class SearchController
{

    // Verifica se qie, esta entrando pela url e realmente um medico
    public function index()
    {
        if ($_SESSION['isMedic'] == "true") {
            $search = new SearchIndex();
            $search->render($_SESSION);
        } else {
            header("location: /Web");
        }
    }
}
