<?php

require_once 'view/ViewProfile.php';

session_start();


// Responsavel em carregar o perfil de um paciente em que o medico acompanha

class View
{
    private $id;
    public function __construct($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        if ($_SESSION['isMedic'] == "true") {
            $search = new ViewProfile();
            $search->render($this->id);
        } else {
            header("location: /Web");
        }
    }
}
