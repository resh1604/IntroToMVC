<?php

require 'vendor/autoload.php';

use project\control;
use project\mod;

$obj = new control\controller();
$obj->invoke();

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new Twig_Loader_Filesystem(__DIR__ . '/view/templates');  
$twig = new Environment($loader);  
echo $twig->render('render.html.twig', ['name' => 'Kevin Layland','city' => 'Sydney']);  
?>
