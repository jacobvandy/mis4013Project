<?php
require_once("util-db.php");
require_once("model-candy-chart.php");

$pageTitle = "Candy Count Chart";
include "view-header.php";

$candy = SelectCandy();
include "view-candy-chart.php";
include "view-footer.php";
?>
