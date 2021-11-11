<?php
define('USER', 'id17681847_root');
define('PASSWORD', 'Admin@123456789');
define('HOST', 'localhost');
define('DATABASE', 'id17681847_roux');

try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}


?>