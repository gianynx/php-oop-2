<?php
class Product
{
    public
    $id, $image, $title, $price, $category;

    public function __construct($id, $image, $title, $price, Category $category)
    {
        $this->id = $id;
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }
}