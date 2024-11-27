<?php
require_once("util-db.php");
require_once("model-manufacturer-by-candy.php");

$pageTitle = "Manufacturers By Candy";
include "view-header.php";
$manu = SelectManufacturerByCandy($_GET['id']);
include "view-manufacturer-by-candy.php";
include "view-footer.php";
?>
