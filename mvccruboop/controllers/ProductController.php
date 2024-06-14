<?php
require_once "models/Product.php";
class ProductController extends Product
{

   public function listProduct()
    {
        $products = $this->getProduct();
        include "views/list.php";
    }

   public function updateProduct()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $product = $this->getProduct($id);
            include "views/update.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $this->update($id, $name, $price);

            header("Location: index.php");
        }
    }

    public function deleteProduct()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->delete($id);
            header("Location: index.php");
        }
    }

    public function newProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $this->inset($name, $price);
            header("Location: index.php");
        }
        include "views/new.php";
    }
}
