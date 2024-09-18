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

    public function __construct($title, $price, $image, Category $category, $productType) {
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

// Le seguenti classi estendono la classe del prodotto
class Food extends Product {
    public $expiration;

    public function __construct($title, $price, $image, Category $category, $expiration) {
        parent::__construct($title, $price, $image, $category, "Cibo");
        $this->expiration = $expiration;
    }
}

class Game extends Product {
    public $material;

    public function __construct($title, $price, $image, Category $category, $material) {
        parent::__construct($title, $price, $image, $category, "Gioco");
        $this->material = $material;
    }
}

class Kennel extends Product {
    public $dimensions;

    public function __construct($title, $price, $image, Category $category, $dimensions) {
        parent::__construct($title, $price, $image, $category, "Cuccia");
        $this->dimensions = $dimensions;
    }
}

// Definizione delle categorie
$categoryDogs = new Category("Cani", "icona-cani.png");
$categoryCats = new Category("Gatti", "icona-gatti.png");

// Creazione delle istanze
$foodDogs = new Food("Cibo Premium Cani", 24.99, "cibo-premium-cani.jpg", $categoryDogs, "2025-12-31");
$gameCats = new Game("Gioco Gatto Palla", 5.99, "gioco-palla-gatti.jpg", $categoryCats, "Plastica");
$kennelDogs = new Kennel("Cuccia Grande", 49.99, "cuccia-grande.jpg", $categoryDogs, "90x60 cm");

// Stampa dei risultati
var_dump($foodDogs);
var_dump($gameCats);
var_dump($kennelDogs);

class Shop {
    public $products = [];

    public function addproduct(product $product) {
        $this->products[] = $product;
    }

    public function showproducts() {
        foreach ($this->products as $product) {
            echo "<div class='card'>";
            echo "<img src='{$product->image}' alt='{$product->title}' />";
            echo "<h2>{$product->title}</h2>";
            echo "<p>Price: €{$product->price}</p>";
            echo "<p>Category: {$product->category->name}</p>";
            echo "<p>Typ: {$product->productType}</p>";
            echo "<img src='{$product->category->icon}' alt='Icon {$product->category->name}' />";
            echo "</div>";
        }
    }
}

// Esempio di utilizzo:
$shop = new Shop();
$shop->addProduct($foodDogs);
$shop->addProduct($gameCats);
$shop->addProduct($kennelDogs);

$shop->showProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Negozio di prodotti per animali</h1>
    <div class="shop-container d-flex">
        <?php
        //mostra i prodotti del negozio
        $shop->showProducts();
        ?>
    </div>
</body>
</html>