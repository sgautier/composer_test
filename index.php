<?php
// Include autoload.php generated by composer
require_once "vendor/autoload.php";

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Init Twig
$loader = new FilesystemLoader(__DIR__);
$twig = new Environment($loader, []);

// Use Twig as you want :D
echo $twig->render('test.html.twig', ['var' => 'My var value :)']);
