<?php

require_once 'view/Search.php';


session_start();

class SearchController
{
    public function index()
    {
        if($_SESSION['isMedic'] == "true"){
            $search = new SearchIndex();
            $search->render();
        } else {
            header("location: /Web");
        }
    }
}
