<?php

    class ShoppingCart {
        private $items;

        public function ShoppingCart($items = array()) {
            $this->items = $items;
        }
    }

    $sc = new ShoppingCart();
    var_dump($sc);