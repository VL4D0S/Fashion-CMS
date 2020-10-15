<option value="<?php if(!$_GET || (isset($_GET["sort"]) && ($_GET["cat1"] == NULL) && ($_GET["cat2"] == NULL))) { echo '?sort=price';} else { if (isset($_GET["sort"])) { echo $_GET;} else { echo $_SERVER['REQUEST_URI'] . '&sort=price';}}?>">По цене</option>
<option value="<?php if(!$_GET || (isset($_GET["sort"]) && ($_GET["cat1"] == NULL) && ($_GET["cat2"] == NULL))) { echo '?sort=name';} else { if (isset($_GET["sort"])) { echo $_GET;} else { echo $_SERVER['REQUEST_URI'] . '&sort=name';}}?>">По названию</option>

