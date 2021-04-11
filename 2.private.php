<?php

//  What output will be here?

class Animal
{
    private $name;

    public function name()
    {
        return $this->name;
    }
}

$animal = new Animal();
$animal->name = "Monkey";

echo $animal->name();