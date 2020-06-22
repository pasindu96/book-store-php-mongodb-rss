<?php

require 'vendor/autoload.php'; // include Composer's autoloader

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$client = new \MongoDB\Client("mongodb://localhost:27017");

// $client = new MongoClient("mongodb://localhost:27017");
$collection = $client->book_store->books;


?>