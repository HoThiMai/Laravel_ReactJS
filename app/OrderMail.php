<?php

namespace App;


class OrderMail
{
    public $name;
    public $quantity;
    public $price;
    public $size;
    public $color;
    public function __construct($name, $price,$quantity, $color,$size)
    {
        $this->price = $price;
        $this->name = $name;
        $this->size = $size;
        $this->color = $color;
        $this->quantity = $quantity;
    }
}
