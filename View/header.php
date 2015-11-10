<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" ><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" ><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 ie-lt10 ie-lt9 no-js" ><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 ie-lt10 no-js" ><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" ><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="WelcoM dans le quartier du Panier">
  <meta name="keywords" content="">
  <meta name="author" content="WelcoM">
  <title>WelcoM</title> <!-- website title -->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type='text/css' href="<?php echo __SITE_URL.'/Assets/css/style.css' ?>" rel='stylesheet'>
  <link type='text/css' href="<?php echo __SITE_URL.'/Assets/css/materialize.css' ?>" rel='stylesheet'>
  
  <!--<link type='text/css' href='css/color.css' rel='stylesheet'>-->
  <link rel="icon" href="img/favicon.ico"> <!-- website icon -->
</head>

<body>



    <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Restauration</a></li>
  <li><a href="#!">Se cultiver</a></li>
  <li><a href="#!">La nuit</a></li>
  <li><a href="#!">Shopping</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">WelcoM To</a>
    <ul class="right hide-on-med-and-down">
      <li><a class="waves-effect waves-light" href="#">Accueil</a></li>
      <li><a class="waves-effect waves-light" href="?page=news"">Histoire</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button waves-effect waves-light" href="#!" data-activates="dropdown1">Découvir<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="waves-effect waves-light" href="#">Portfolio</a></li>
      <li><a class="waves-effect waves-light" href="#">Contact</a></li>
    </ul>
     <ul class="side-nav" id="slide-out">
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Histoire</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header">Découvrir<i class="mdi-navigation-arrow-drop-down"></i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="#!">Restauration</a></li>
                    <li><a href="#!">Se cultiver</a></li>
                    <li><a href="#!">La nuit</a></li>
                    <li><a href="#!">Shopping</a></li>
                  </ul>
                </div>
              </li>
            </ul>
        </li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
     <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
  </div>
</nav>