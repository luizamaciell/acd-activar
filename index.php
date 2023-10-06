<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/agenda","Web:schedule");
$route->get("/blog","Web:blog");
$route->get("/contato","Web:contact");
$route->get("/faq","Web:faq");
$route->get("/treinadores","Web:trainers");

$route->get("/api-faqs","Web:apiFaq");
$route->get("/api-login","Web:apiLogin");
$route->get("/api-plans","Web:apiPlans");
$route->get("/api-plans","Web:apiPlans");
$route->get("/api-ficha","Web:apiFicha");


$route->get("/registro","Web:register");
$route->get("/login","Web:login");

$route->get("/planos","Web:plans");
$route->get("/planos/{categoriesName}","Web:plans");

$route->group(null);

/*
 * APP
 */

 $route->group("/app"); // agrupa em /app
 $route->get("/","App:home");
 $route->get("/matriculas","App:matriculas");
 $route->get("/area","App:area");
 $route->get("/user","App:user");
 $route->get("/logout","App:logout");
 $route->group(null); // desagrupo do /web

 /*
 * ADM
 */

 $route->group("/admin"); // agrupa em /adm
 $route->get("/","Adm:home");
 $route->get("/matriculados","Adm:matriculados");
 $route->group(null); // desagrupo do /web

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
