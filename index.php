<?php

use Oop\ClassA;
use Oop\ClassB;
use Oop\AbstractBank;
use Oop\TPBank;

require_once "ClassA.php";
require_once "ClassB.php";
require_once "AbstractBank.php";
require_once "TPBank.php";

$classA = new ClassA("Hiếu", "Đỏ", 23);
$classA->show();

$classB = new ClassB("Huy", "Xanh", 24);
$classB->setColor("Vàng");
$classB->show();
ClassB::show2();

$TPBank = new TPBank("TPBank", "123456", 1000000);
$TPBank->rechange(1000000);
echo "Số dư tài khoản : " . number_format($TPBank->money) . " VNĐ";