<?php

//  What output will be here?

abstract class Bird
{
    abstract public function run(): string;

    public function name()
    {
        return $this->name;
    }
}

class Sparrow extends Bird
{
    protected $name = "Sparrow";

    public function run(): string
    {
        return "Jumping";
    }
}

class Dove extends Bird
{
    protected $name = "Dove";
}

$sparrow = new Sparrow();
echo $sparrow->run();

$dove = new Dove();
echo $dove->run();

