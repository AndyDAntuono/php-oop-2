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


?>