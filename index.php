<?php

use Oop\ABBank;
use Oop\ClassA;
use Oop\ClassB;
use Oop\AbstractBank;
use Oop\HDBank;
use Oop\TPBank;

require_once "ClassA.php";
require_once "ClassB.php";
require_once "AbstractBank.php";
require_once "TPBank.php";
require_once "interfaceBank.php";
require_once "HDBank.php";
require_once "ABBank.php";

$classA = new ClassA("Hiếu", "Đỏ", 23);
$classA->show();

$classB = new ClassB("Huy", "Xanh", 24);
$classB->setColor("Vàng");
$classB->show();
ClassB::show2();

$TPBank = new TPBank("TPBank", "123456", 1000000);
$TPBank->rechange(1000000);
echo "Số dư tài khoản : " . number_format($TPBank->money) . " VNĐ<br/>";

$hung = new HDBank("Hùng", "123456", 5000000);
$dat = new ABBank("Đạt", "123456", 10000000);

$hung->show();
$hung->transferMoney($dat, 1000000);
$hung->show();

$dat->show();
$dat->transferMoney($hung, 1000000);