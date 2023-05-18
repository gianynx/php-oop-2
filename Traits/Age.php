<?php
trait Age
{
    protected $age;

    public function setAge($age){
        if (!is_int($age)){
            throw new Exception("It isn't a number!");
        }
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }
}