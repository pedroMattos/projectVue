<?php
include 'connection.php';
?>
<!DOCTYPE html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <title>Teste Vue</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="assets/css/main.css"/>
    </head>
    <body>
    <nav id="nav-1-desloged">
        <ul>
            <li id="brand">LOGO</li>
            <li id="menu">Menu</li>
        </ul>
    </nav>
    <ul class="z-depth-2" id="submenu">
        <li>Produtos</li>
        <li>Login</li>
        <li>Cadastrar</li>
    </ul>