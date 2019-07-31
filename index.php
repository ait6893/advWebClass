<?php
require('vendor/autoload.php');

use aitsydney\Product;

$products = new Product();
$products_result = $products -> getProducts();

//create twig loader
$loader = new Twig_Loader_FilesystemLoader('templates');

//create twig environment
$twig = new Twig_Environment($loader);

//load a twig template
$template = $twig -> load('home.twig');

//pass value to twig
echo $template -> render([
    'products' => $products_result,
    'title' => 'Hello shop'
]);
?>