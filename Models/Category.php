<?php
class Category extends Product
{
    public function __construct($id, $image, $title, $price, $category, $type){
        parent::__construct($id, $image, $title, $price, $category, $type);
    }
}