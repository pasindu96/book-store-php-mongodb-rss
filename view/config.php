<?php

require __DIR__ . "/vendor/autoload.php";

$collection = (new MongoDB\Client)->book_store->books;

?>