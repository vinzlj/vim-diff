<?php

class Human
{
    private $age;

    public function __construct(int $age)
    {
	$this->age = $age;
    }

    public function getAge(): string
    {
	return sprintf('I\'m %s years old!', $this->age);
    }
}

$human = new Human(12);
var_dump($human->getAge());
