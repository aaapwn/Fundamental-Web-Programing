<?php
include 'db.php';

$sql = "DELETE FROM customers WHERE CustomerId = (SELECT MAX(CustomerId) FROM customers);";
$db->exec($sql);
header('Refresh: 0; url=./');

