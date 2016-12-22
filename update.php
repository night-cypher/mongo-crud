<?php

include('db_connect.php');

$collection = $db->collection;

$collection->update(array("title"=>"item"),
    array('$set'=>array("title"=>"updated item")));
echo "Document updated successfully";

// now display the updated document
$cursor = $collection->find();

// iterate cursor to display title of documents

foreach ($cursor as $document) {
    echo $document["title"] . "\n";
}
?>