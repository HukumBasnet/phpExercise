<?php
    $ui = new UserInfo('Christian', 'Wenz');
    $sc = new ShoppingCart();
    $sc->addItems('PHP4', 'PHP5', 'PHP 7');
    $td = new TempData();

    $data = [$ui, $sc, $td];
    print_r($data);

    $serialized_data = serialize($data);
    $unserialized_data = unserialize($serialized_data,
        ['allowed_classes' => ['UserInfo', 'ShoppingCart']]);
    print_r($unserialized_data);

    class UserInfo {
        private $firstname;
        private $lastname;
        public function __construct(string $firstname, string $lastname) {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
        }
    }

    class ShoppingCart {
        private $items = array();
        public function addItems(...$items) {
            foreach ($items as $item) {
                array_push($this->items, $item);
            }
        }
    }

    class TempData {
        private $token = '';
        public function __construct() {
            $this->token = 1 / rand(2, 1000);
        }
    }
