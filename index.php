<?php

// questa classe serve per caterigozzare i prodotti
class Category {
    public $name;
    public $icon;

    public function __construct($name, $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }
}

$categoryDogs = new Category("Cani", "icon-cani.png");
$categoryaCats = new Category("Gatti", "icon-gatti.png");

var_dump($categoryDogs);
var_dump($categoryaCats);

// questa classe rappresenta un prodotto generico
class Product {
    public $title;
    public $price;
    public $image;
    public $category;
    public $productType;

    public function __construct($title, $price, $image, $category, $productType) {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->productType = $productType;
    }
}

$product1 = new Product("Cibo per Cani Premium", 19.99, "cibo-cani.jpg", $categoryDogs, "Cibo");
$product2 = new Product("Cibo per Gatti", 9.99, "gioco-gatti.jpg", $categoryaCats, "Gioco");

var_dump($product1);
var_dump($product2);

?>