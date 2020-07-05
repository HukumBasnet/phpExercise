<?php
    $analytics = new class {
        public function __notToString() {
            return "Anonymous analytics!";
        }
    };

    echo $analytics;