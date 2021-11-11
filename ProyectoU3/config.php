<?php
define('USER', 'id17917205_root');
define('PASSWORD', 'Hol&123456789');
define('HOST', 'localhost');
define('DATABASE', 'id17917205_roux');

try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}


?>