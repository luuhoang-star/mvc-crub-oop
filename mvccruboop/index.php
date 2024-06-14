<?php
require_once "controllers/ProductController.php";
$product = new ProductController();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url){
    case '/':
        $product->listProduct();
        break;
    case 'update':
        $product->updateProduct();
        break;
    case 'delete':
        $product->deleteProduct();
        break;
    case 'insert':
        $product->newProduct();
        break;
}