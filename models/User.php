<?php

    class User {

        public $nome;
        public $cognome;
        public $email;
        public $data_nascita;

        public $cart = [];

        public function addProduct($product){
            $this->cart[] = $product;
        }

        
        
    }

?>