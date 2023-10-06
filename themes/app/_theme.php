<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Activitar Template">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activitar | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" type="text/css" href="<?=url("/assets/web/css/bootstrap.min.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=url("/assets/web/css/font-awesome.min.css")?>"> 
    <link rel="stylesheet" type="text/css" href="<?=url("/assets/web/css/elegant-icons.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=url("/assets/web/css/nice-select.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=url("/assets/web/css/owl.carousel.min.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=url("/assets/web/css/magnific-popup.css")?>"> 
    <link rel="stylesheet" type="text/css" href="<?=url("/assets/web/css/slicknav.min.css" )?>">
    <link rel="stylesheet" type="text/css" href="<?=url("/assets/web/css/style.css")?>">
</head>

<body>
    <!-- Page Preloder --
    <div id="preloder">
        <div class="loader"></div>
    </div>
     

    <-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="logo">
                <a href="<?= url() ?>">
                    <img src=<?=url("/assets/web/img/logo.png")?> alt="">
                </a>
            </div>
            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li class="active"><a a href="<?= url() ?>">Home</a></li>
                            <li><a href="<?= url("sobre") ?>">Sobre nós</a></li>
                            <li><a href="<?= url("agenda") ?>">Agenda</a></li>
                            <li><a href="<?= url("contato") ?>">contato</a></li>
                            <li><a  href="<?= url("faq") ?>">faq</a></li>
                            <li><a  href="<?= url("planos") ?>">Planos</a>
                                <ul class="dropdown">
                                    <?php
                                    foreach($categories as $category){
                                        ?>
                                        <li><a href="<?= url("planos/{$category->name}"); ?>"><?= $category->name;?></a></li>
                                        <?php
                                        }
                                        ?>
                                </ul>
                            </li>
                            <li><a href="login"><i class="fa fa-user" aria-hidden="true"></i>
                            <ul class="dropdown">
                             <li><a href="<?= url("login") ?>">Login</a></li>
                             <li><a href="<?= url("registro") ?>">Registrar</a></li>   
                            </ul>
                           </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    </header>
    <main id = "main">
<?php 
echo $this->section("content");
?>
</main>
    <!-- Header End -->

    <!-- Js Plugins -->
    <script src= "<?= url("/assets/web/js/js/jquery-3.3.1.min.js")?>" async></script>
    <script src="<?= url("/assets/web/js/bootstrap.min.js")?>" async></script>
    <script src="<?= url("/assets/web/js/jquery.magnific-popup.min.js")?>" async></script>
    <script src="<?= url("/assets/web/js/mixitup.min.js")?>" async></script>
    <script src="<?= url("/assets/web/js/jquery.nice-select.min.js")?>" async></script>
    <script src="<?= url("/assets/web/js/jquery.slicknav.js")?>" async></script>
    <script src="<?= url("/assets/web/js/owl.carousel.min.js")?>" async></script>
    <script src="<?= url("/assets/web/js/masonry.pkgd.min.js")?>" async></script>
    <script src="<?= url("/assets/web/js/main.js")?>" async></script>
</body>

</html>