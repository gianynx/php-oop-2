<?php
class Food extends Product
{
    public
    $foodIngredients, $deadline;
    
    public function __construct(int $id, string $image, string $title, float $price, Category $category, array $foodIngredients, DateTime $deadline)
    {
        parent::__construct($id, $image, $title, $price, $category);
        $this->foodIngredients = $foodIngredients;
        $this->deadline = $deadline;
    }
}