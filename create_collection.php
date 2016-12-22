<?php
include('db_connect.php');

$collection = $db->createCollection("collection");
echo "Collection created succsessfully";
?>