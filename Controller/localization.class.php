<?php
error_reporting(E_ALL | E_STRICT);

$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$language = $language{0}.$language{1};

$fr = '_FR';
$es = '_ES';
$us = '_US';

// define constants
define('PROJECT_DIR', realpath('./'));
define('LOCALE_DIR', PROJECT_DIR .'/Assets/locale');
define('DEFAULT_LOCALE', 'en_US');

require_once('/Assets/libs/gettext.inc');

$supported_locales = array('en_US', 'fr_FR');
$encoding = 'UTF-8';


if(isset($_GET['lang'])){
    $language = $_GET['lang'];  
}else if($language =='en'){
    $language = $language.$us;
}else if($language =='fr'){
    $language = $language.$fr;
}

if(($language == $supported_locales[0] || $language == $supported_locales[1]) || isset($_GET['lang'])){
    $locale= $language;
}
else{
    $locale = DEFAULT_LOCALE;
}
//$locale = (isset($_GET['lang']))? $language : DEFAULT_LOCALE;

// gettext setup
T_setlocale(LC_MESSAGES, $locale);
// Set the text domain as 'messages'
$domain = 'trad';
bindtextdomain($domain, LOCALE_DIR);
// bind_textdomain_codeset is supported only in PHP 4.2.0+
if (function_exists('bind_textdomain_codeset')) {
    bind_textdomain_codeset($domain, $encoding);
}



textdomain($domain);

@header("Content-type: text/html; charset=$encoding");

