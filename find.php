<?php
include('db_connect.php');
$collection = $db->collection;

$cursor = $collection->find();
// iterate cursor to display title of documents

foreach ($cursor as $document) {
    echo $document["title"] . "\n";
}
?>