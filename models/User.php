<?php

    class User {

        public $name;
        public $surname;
        public $email;
        public $date_of_birt;

        public $cart = [];

        public function addProduct($product){
            $this->cart[] = $product;
        }

        
        
    }

?>