<?php

    $orderNumbers = [5, 31, 123, 444];

    usort($orderNumbers, function($p1, $p2) {
        return $p1 <=> $p2;
    });

    var_dump($orderNumbers);