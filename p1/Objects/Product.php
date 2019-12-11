<?php


class Product
{

    public $item_id;
    public $item_name;
    public $item_price;
    public $item_desc;


    public function __construct($db)
    {
        $this->conn = $db;
    }

}