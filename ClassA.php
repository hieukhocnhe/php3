<?php

namespace Oop;

class ClassA
{
    private string $name;
    protected string $color;
    public $age;
    public function __construct($name, $color, $age)
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    public function show()
    {
        echo "Họ và tên : $this->name <br>";
        echo "Màu sắc : $this->color <br>";
        echo "Tuổi : $this->age <br>";
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    
}