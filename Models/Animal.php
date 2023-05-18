<?php
include __DIR__ . '/../Traits/Age.php';
class Animal
{
    use Age;
    public
    $image, $name, $age;

    public function __construct(string $image, string $name, int $age)
    {
        $this->image = $image;
        $this->name = $name;
        $this->age = $age;
    }
}