<?php
include('db_connect.php');

$collection = $db->collection;

$document = array(
    "title" => "item",
    "description" => "abc",
    "price" => 100,
    "image_url" => "http://www.questdot.com/image/image.jpg"
    
);

$collection->insert($document);
echo "Document inserted successfully";
?>