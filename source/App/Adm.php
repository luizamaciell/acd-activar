<?php

namespace Source\App;

use League\Plates\Engine;


class Adm
{
    private $view;

    public function __construct()
    {
       $this->view = new Engine(__DIR__. "/../../themes/adm", "php");
    }

    public function home()
    {
        //echo "Olá, eu sou o ADM!";
        echo $this->view->render(
            "home"
        );
    }
    public function matriculados()
    {
        //echo "Olá, eu sou o ADM!";
        echo $this->view->render(
            "matriculados"
        );
    }
}