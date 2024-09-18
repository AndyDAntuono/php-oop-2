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

$categoryDogs = new Category("Cani", "<i class='fa-solid fa-dog category-icon'></i>");
$categoryCats = new Category("Gatti", "<i class='fa-solid fa-cat category-icon'></i>");

//var_dump($categoryDogs);
//var_dump($categoryCats);

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
$product2 = new Product("Cibo per Gatti", 9.99, "gioco-gatti.jpg", $categoryCats, "Gioco");

//var_dump($product1);
//var_dump($product2);

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
$categoryDogs = new Category("Cani", "<i class='fa-solid fa-dog category-icon'></i>");
$categoryaCats = new Category("Gatti", "<i class='fa-solid fa-cat category-icon'></i>");

// Creazione delle istanze
$foodDogs = new Food("Cibo Premium Cani", 24.99, "dog-food.jpeg", $categoryDogs, "2025-12-31");
$gameCats = new Game("Gioco Gatto Palla", 5.99, "catBall.jpg", $categoryCats, "Plastica");
$kennelDogs = new Kennel("Cuccia Grande", 49.99, "wood-dog-kennel.jpg", $categoryDogs, "90x60 cm");

// Stampa dei risultati
//var_dump($foodDogs);
//var_dump($gameCats);
//var_dump($kennelDogs);

// Creiamo lo shop con i prodotti
$shopProducts = [$foodDogs, $gameCats, $kennelDogs];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<h1 class="text-center my-4">Negozio di prodotti per animali</h1>
    <div class="container">
        <div class="row">
            <?php foreach ($shopProducts as $product): ?>
                <div class="col-4">
                    <div class="card">
                        <img src="./img/<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->title; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->title; ?></h5>
                            <p class="card-text">Prezzo: €<?php echo $product->price; ?></p>
                            <p class="card-text">Categoria: <?php echo $product->category->name; ?></p>
                            <p class="card-text">Tipo: <?php echo $product->productType; ?></p>
                            <div><?php echo $product->category->icon; ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>