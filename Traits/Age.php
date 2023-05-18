<?php
trait Age
{
    public $age;

    public function __construct(int $age)
    {
        $this->age = $age;
    }
}