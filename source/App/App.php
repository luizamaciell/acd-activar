<?php

namespace Source\App;

use League\Plates\Engine;


class App
{
    private $view;

    public function __construct()
    {
       $this->view = new Engine(__DIR__. "/../../themes/app", "php");
    }

    public function home()
    {
       //echo "Olá, eu sou o ADM!";
       echo $this->view->render(
        "home"
    );
    }
    public function matriculas()
    {
       //echo "Olá, eu sou o ADM!";
       echo $this->view->render(
        "matriculas"
    );
    }
    public function user()
    {
       //echo "Olá, eu sou o ADM!";
       echo $this->view->render(
        "user"
    );
    }
}