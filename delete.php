<?php
require_once 'config.php';
$conn = Db::getConnection();


$conn->query('delete from users where id > 5');


$conn->query('delete from customers where id > 2');


//$conn->query('delete from orders where id > 0');


//$conn->query('delete from order_items where id > 0');