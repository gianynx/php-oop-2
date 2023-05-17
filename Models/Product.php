<?php
class Product
{
    public
    $id, $image, $title, $price, $category;

    public function __construct(int $id, string $image, string $title, float $price, Category $category)
    {
        $this->id = $id;
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }
}