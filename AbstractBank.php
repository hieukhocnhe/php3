<?php

namespace Oop;

abstract class AbstractBank
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

    public abstract function rechange($money);
}