<?php


class SingUpView
{
    public function render()
    {

        $html = file_get_contents('view/Pages/SingUp.php');


        //send HTML to output
        print $html;
    }
}
