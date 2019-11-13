<?php
class LoginView
{
    public function render()
    {

        $html = file_get_contents('view/Pages/Login.php');

        //send HTML to output
        print $html;
    }
}
