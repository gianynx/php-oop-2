<?php
class Food extends Product
{
    public
    $dogFoodIngredients, $deadline;
    
    public function __construct($id, $image, $title, $price, $category, $dogFoodIngredients, $deadline)
    {
        parent::__construct($id, $image, $title, $price, $category);
        $this->dogFoodIngredients = $dogFoodIngredients;
        $this->deadline = $deadline;
    }
}