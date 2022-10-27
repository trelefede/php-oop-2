<?php

    class User {

        public $name;
        public $surname;
        public $email;
        public $date_of_birt;

        public $cart = [];

        public $creditCard;

        public function addProduct($product){
            $this->cart[] = $product;
        }

        public function addCreditCard($_owner, $_number, $expire_date, $_CVV){
            $this->creditCard = new CreditCard($_owner, $_number, $expire_date, $_CVV);
        }
        
    }

?>