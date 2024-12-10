<?php
require_once("util-db.php");
require_once("model-candy-with-manufacturer.php");

$pageTitle = "Manufacturers and their Candies";
include "view-header.php";

if (isset($_POST['actionType'])) {
 switch ($_POST['actionType']) {
   case "Add":
   if (insertCanManu($_POST['mName'], $_POST['mCountry'], $_POST['mid'], $_POST['cName'], $_POST['cPrice'], $_POST['cid'])) {
    echo '<div class="alert alert-success" role="alert">Cany and Manu Added</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error adding Candy w/ Manufacturer</div>';
   }
  
   break;


  case "Edit":
   if (updateCanManu($_POST['mName'], $_POST['mCountry'])) {
    echo '<div class="alert alert-success" role="alert"> Candy edited!</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error editing Candy</div>';
   }
   break;
  

  case "Delete":
   if (deleteCanManu($_POST['cid'])) {
    echo '<div class="alert alert-success" role="alert">Candy Deleted</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error deleting Candy</div>';
   }
  
   break;
 }
}


$candy = SelectCandy();
include "view-candy-with-manufacturer.php";
include "view-footer.php";
?>
