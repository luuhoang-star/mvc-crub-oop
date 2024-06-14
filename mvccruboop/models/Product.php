<?php
require_once "models/db.php";

// Xay dung ham truy van de lay dc danh sach san pham
class Product extends db
{

    public function getProduct($id = 1)
    {
        $sql = "SELECT * FROM products ";
        if ($id != 1) {
            $sql = $sql . " WHERE id='$id'";
        } else {
            $sql = $sql . " WHERE $id";
        }
        return $this->getData($sql);
    }

    public function update($id, $name, $price)
    {
        $sql = "UPDATE products SET name='$name',price=$price WHERE id='$id' ";
        return $this->getData($sql, false);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE id='$id' ";
        return $this->getData($sql, false);
    }

    public function inset($name, $price)
    {
        $sql = "INSERT INTO products(name,price) VALUES ('$name','$price')";
        return $this->getData($sql, false);
    }
}

// db--> Product --> ProductController