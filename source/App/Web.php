<?php

namespace Source\App;

use League\Plates\Engine;

class Web
{

    private $view;

    public function __construct(){

        $this->view = new Engine(__DIR__ . "/../../themes/web", "php");

    }

    public function home()
    {
        //echo "Olá, Mundo! Home";
  
        echo $this->view->render("home", [
            "name" => "Laura",
            "age" => 16
        ]);

    }

    public function about()
    {
        //echo "Olá, Mundo! Sobre";
        echo $this->view->render("about");

    }

    public function location()
    {
        echo "Essa é a minha localização!";
    }

    public function blog (){
        echo "esse é o meu blog bonitinho...";
    }

    public function contact (){
        echo "Olá, esse é o meu contatinho...";
    }

    public function profile (){
        echo "Esse é o meu perfil legal";
    }

    public function login()
    {
        echo $this->view->render("login");

    }

    public function register()
    {
        echo $this->view->render("register");

    }

    public function avisos()
    {
        echo $this->view->render("avisos");

    }

    public function problema()
    {
        echo $this->view->render("problema");

    }

    public function demanda()
    {
        echo $this->view->render("demanda");

    }



}