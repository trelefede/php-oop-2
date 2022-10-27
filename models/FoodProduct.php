<?php

    require_once __DIR__ . '/Product.php';

    class FoodProduct extends Product {

        public $category = 'Food';

        public $expire_date = date("Y-m-d");
        public $kind = 'secco';
        public $weight = 0;
        public $ingredients = [];
        public $countryProduction = '';

    }

?>