<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>S W E - Sistema Web Escolar</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="/main">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                <div class="sidebar-brand-text mx-3 my_FontColor"><span>S W E</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="nav navbar-nav text-light">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" href=""><i class=""></i>
                        <img class="border rounded-circle img-profile mx-auto" src="assets/img/user-icon.jpg" />
                        <span class="p-1 my_FontColor">
                            <?php
                                if($usuario){
                                    echo $usuario->nome;
                                }
                            ?></span>
                    </a></li>
            </ul>
            <?php
            foreach ($itens as $key => $value){ ?>
            <ul class="nav navbar-nav text-light">
                <li class="nav-item" role="presentation"><a class="nav-link active my_FontColor" href="<?=$value['url']?>"><i class=""></i><span><?=$value['nome']?></span></a></li>
            </ul>

            <?php } ?>
            <ul class="nav navbar-nav text-light">
                <li class="nav-item" role="presentation"><a class="nav-link active my_FontColor" href="/logout"><i class=""></i><span>SAIR</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">