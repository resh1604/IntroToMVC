<?php

require 'vendor/autoload.php';
// Twig_Autoloader::register();
//require __DIR__.'/../vendor/autoload.php';

// use reshu\r;
// use reshu\s;

// $oneobj = new r\one();
// $twoobj = new s\two();

// $oneobj2 = new reshu\r\one();

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html', array (
    'name' => 'dcjscjdsncsdnkc',
));



?>