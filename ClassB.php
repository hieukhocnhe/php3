<?php
namespace Oop;

class ClassB extends ClassA
{
    public function setColor($color)
    {
        $this->color = $color;
    }

    public static function show2()
    {
        $static = new static("Nhi", "Hồng", 24);
        echo "Họ và tên : " . $static->getName() . "<br>";
        echo "Màu sắc : $static->color <br>";
        echo "Tuổi : $static->age <br>";
    }
}