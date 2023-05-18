<?php
include __DIR__ . '/../Traits/Age.php';
class SmallAnimal
{
    use Age;
    public
    $image, $name;

    public function __construct(string $image, string $name, int $age)
    {
        $this->image = $image;
        $this->name = $name;
        $this->setAge($age);

        try {
            $this->setAge($age);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getAnimalAge(){
        return $this->age;
    }
}