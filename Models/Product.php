<?php
class Product
{
    public
    $id, $image, $title, $price, $category, $type;

    public function __construct($id, $image, $title, $price, Category $category, Type $type){
        $this->id = $id;
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }
}