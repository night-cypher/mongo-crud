<?php

include('db_connect.php');

$collection = $db->collection;

$collection->remove(array("title"=>"item"));
echo "Documents deleted successfully";

// now display the available documents
$cursor = $collection->find();

foreach ($cursor as $document) {
    echo $document["title"] . "\n";
}
?>