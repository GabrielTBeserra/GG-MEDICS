<?php


class SearchIndex
{
    public function render()
    {

            $html = file_get_contents('view/Pages/search_patient.php');


            print $html;
    }
}