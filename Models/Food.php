<?php
class Food extends Product
{
    public
    $deadline;
    
    public function __construct(int $id, string $image, string $title, float $price, Category $category, DateTime $deadline)
    {
        parent::__construct($id, $image, $title, $price, $category);
        $this->deadline = $deadline;
    }
}