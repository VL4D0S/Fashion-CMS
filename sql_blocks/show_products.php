<?php

//mysql connect
require_once($_SERVER['DOCUMENT_ROOT'] . "/mysql_connect.php");

$sort = $_GET['sort'];

$sorts = ["id", "name", "price"]; //available values
$sortKey = array_search($sort, $sorts);
$sortBy = $sorts[$sortKey];
echo $sortBy;

if (!$_GET['cat1'] && !$_GET['cat2']) {
    $sort = "name";
    $sql = "SELECT * FROM `products` ORDER BY `".$sort."` LIMIT 12";

    $query = mysqlConnect()->prepare($sql);
    $query->execute();
} elseif (($_GET['cat1'] == "new") || ($_GET['cat1'] == "sale")) {
    if (($_GET['cat2'] == "girl") || ($_GET['cat2'] == "man") ||
        ($_GET['cat2'] == "child") || ($_GET['cat2'] == "acces")) {
        $sql = 'SELECT * FROM `products` WHERE `cat1` IN ("new_sale", ?) AND `cat2` = ? ORDER BY `id` LIMIT 12';

        $query = mysqlConnect()->prepare($sql);
        $query->execute([$_GET['cat1'], $_GET['cat2']]);
    } else {
        $sql = 'SELECT * FROM `products` WHERE `cat1` IN ("new_sale", ?) ORDER BY `id` LIMIT 12';

        $query = mysqlConnect()->prepare($sql);
        $query->execute([$_GET['cat1']]);
    }
} elseif (($_GET['cat2'] == "girl") || ($_GET['cat2'] == "man") ||
          ($_GET['cat2'] == "child") || ($_GET['cat2'] == "acces")) {
    $sql = 'SELECT * FROM `products` WHERE `cat2` = ? ORDER BY `id` LIMIT 12';

    $query = mysqlConnect()->prepare($sql);
    $query->execute([$_GET['cat2']]);
}

//products count
if ($query) {
    $products = $query->fetchAll(PDO::FETCH_OBJ);

    $productsCount = count($products);
}
