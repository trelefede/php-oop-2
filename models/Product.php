<?php

    class Product {

        public $price = 0;

        public $name;

        public $description = '';
        public $category;

        function __construct($_price, $_name){
            $this->price = $_price;
            $this->name = $_name;
        }

    }



?>