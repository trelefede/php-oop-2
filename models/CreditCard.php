<?php

    class CreditCard {

        public $owner;
        public $number;
        public $expire_date = date('y-m');
        public $CVV;

        function __construct($_owner, $_number, $expire_date, $_CVV){
            $this->owner = $_owner;
            $this->number = $_number;
            $this->expire_date = $_expire_date;
            $this->cvv = $_CVV;
        }

    }

    public function isValid(){
        if($this->expire_date <= date('y-m')){
            return true;
        } else {
            return false;
        }
        
    }

?>