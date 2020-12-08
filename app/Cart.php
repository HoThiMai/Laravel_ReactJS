<?php

namespace App;


class Cart
{
    public $id_Pro;
    public $quantity;
    public $id_Cus;
    public $rental_time;
    public $id_size;
    public function __construct($id_Cus, $id_Pro, $quantity,$rental_time)
    {
        $this->id_Cus = $id_Cus;
        $this->id_Pro = $id_Pro;
        $this->quantity = $quantity;
        $this->rental_time = $rental_time;
        $this->id_size = 0;
    }
}
