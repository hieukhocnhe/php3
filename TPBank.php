<?php 
namespace Oop;

class TPBank extends AbstractBank {
    public function rechange($money) {
        $this->money += $money;
    }
}