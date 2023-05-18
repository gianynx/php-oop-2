<?php
class Food extends Product
{
    public
    $name, $expiry;
    
    public function __construct(int $id, string $image, string $title, float $price, Category $category, string $name, DateTime $expiry)
    {
        parent::__construct($id, $image, $title, $price, $category);
        $this->name = $name;
        $this->expiry = $expiry;
    }
}