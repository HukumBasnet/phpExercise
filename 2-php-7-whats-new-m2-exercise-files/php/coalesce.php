<?php
    $name = $_GET['name'] ?? '(unknown)';

    echo htmlspecialchars($name);