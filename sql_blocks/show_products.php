<?php

//functions
require_once($_SERVER['DOCUMENT_ROOT'] . "/functions.php");

//sort
$sortPostVal = $_POST['sort'] ?? "null";
$sort = actionOnProducts("sort", $sortPostVal, ["price", "name"], "id");

//order
$orderPostVal = $_POST['order'] ?? "null";
$order = actionOnProducts("order", $orderPostVal, ["ASC", "DESC"], "ASC");

if (!isset($_GET['cat1']) && !isset($_GET['cat2'])) {
    $sql = "SELECT * FROM `products` ORDER BY `".$sort."` ".$order." LIMIT 12";

    $query = mysqlConnect()->prepare($sql);
    $query->execute();
} elseif (isset($_GET['cat1']) && (($_GET['cat1'] == "new") || ($_GET['cat1'] == "sale"))) {
    if (isset($_GET['cat2']) && (($_GET['cat2'] == "girl") || ($_GET['cat2'] == "man") ||
        ($_GET['cat2'] == "child") || ($_GET['cat2'] == "acces"))) {
        $sql = "SELECT * FROM `products` WHERE `cat1` IN ('new_sale', ?) AND `cat2` = ? ORDER BY `".$sort."` ".$order." LIMIT 12";

        $query = mysqlConnect()->prepare($sql);
        $query->execute([$_GET['cat1'], $_GET['cat2']]);
    } else {
        $sql = "SELECT * FROM `products` WHERE `cat1` IN ('new_sale', ?) ORDER BY `".$sort."` ".$order." LIMIT 12";

        $query = mysqlConnect()->prepare($sql);
        $query->execute([$_GET['cat1']]);
    }
} elseif (isset($_GET['cat2']) && (($_GET['cat2'] == "girl") || ($_GET['cat2'] == "man") ||
          ($_GET['cat2'] == "child") || ($_GET['cat2'] == "acces"))) {
    $sql = "SELECT * FROM `products` WHERE `cat2` = ? ORDER BY `".$sort."` ".$order." LIMIT 12";

    $query = mysqlConnect()->prepare($sql);
    $query->execute([$_GET['cat2']]);
}

//products count
if (isset($query)) {
    $products = $query->fetchAll(PDO::FETCH_OBJ);

    $productsCount = count($products);
}
