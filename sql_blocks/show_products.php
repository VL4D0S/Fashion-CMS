<?php

//mysql connect
require_once($_SERVER['DOCUMENT_ROOT'] . "/mysql_connect.php");
if (!$_GET) {
    $sql = 'SELECT * FROM `products` ORDER BY `id` LIMIT 9';
} elseif ($_GET['cat1'] == "new") {
    $sql = 'SELECT * FROM `products` WHERE `new` = 1 ORDER BY `id` LIMIT 9';
} elseif ($_GET['cat1'] == "sale") {
    $sql = 'SELECT * FROM `products` WHERE `sale` = 1 ORDER BY `id` LIMIT 9';
}
$query = mysqlConnect()->prepare($sql);
$query->execute();
