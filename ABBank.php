<?php
namespace Oop;

class ABBank implements InterfaceBank
{
    public $name;
    public $account;
    public $money;
    public function __construct($name, $account, $money)
    {
        $this->name = $name;
        $this->account = $account;
        $this->money = $money;
    }
    public function show()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Account: " . $this->account . "<br>";
        echo "Money: " . $this->money . "<br>";
    }
    public function transferMoney($person, $money)
    {
        if ($money > $this->money) {
            echo "Số tiền trong tài khoản không đủ để thực hiện giao dịch!";
        } else {
            $this->money -= ($money + 2000);
            $person->money += $money;
            echo "Bạn đã chuyển số tiền $money thành công <br/>";
            echo "Số dư tài khoản của bạn là:  $this->money <br/>";
        }
    }
}