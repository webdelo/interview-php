<?php

//  What output will be here?

class Magic
{
    private $a = 'a';
    public  $c = 'c';
    private $e = 'e';

    public function __get($name)
    {
        printf("%s\n", mb_strtoupper($name));
        return $name;
    }

    public function __call($name, $args)
    {
        return $this->$name;
    }
}

$magic = new Magic();
printf("%s\n", $magic->a);
printf("%s\n", $magic->b);
printf("%s\n", $magic->c);
printf("%s\n", $magic->d());
printf("%s\n", $magic->e);
printf("%s\n", $magic->f);
printf("%s\n", $magic->g);