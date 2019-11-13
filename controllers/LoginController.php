<?php

require_once '../models/select_singin.php';

$user = $_POST['user'];
$password = $_POST['password'];

$auth = new Auth($user, $password);

class Auth
{
    private $user;
    private $password;
    public function __construct($user, $password)
    {

        $this->user = $user;
        $this->password = $password;

        $select = new SingIn($this->user, $this->password);
        $select->verifyUser();

    }
}
