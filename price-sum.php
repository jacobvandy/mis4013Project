<?php
require_once("util-db.php");
require_once("model-price-sum.php");

$pageTitle = "Price Summary";
include "view-header.php";

$candy1 = SelectCandys();
include "view-price-sum.php";
include "view-footer.php";
?>
