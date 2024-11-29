<?php
require_once("util-db.php");
require_once("model-candy-with-manufacturer.php");

$pageTitle = "Manufacturers and their Candies";
include "view-header.php";
$candy = SelectCandy();
include "view-candy-with-manufacturer.php";
include "view-footer.php";
?>
