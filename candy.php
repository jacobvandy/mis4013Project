php
require_once("util-db.php");
require_once("model-candy.php");

$pageTitle = "Candy";
include "view-header.php";

if (isset($_POST['actionType'])) {
 switch ($_POST['actionType']) {
   case "Add":
   if (insertCandy($_POST['rName'], $_POST['rRating'], $_POST['rFoodType'])) {
    echo '<div class="alert alert-success" role="alert">Candy Added</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error adding Candy</div>';
   }
  
   break;
   case "Edit":
   if (updateCandy($_POST['rName'], $_POST['rRating'], $_POST['rFoodType'], $_POST['rid'])) {
    echo '<div class="alert alert-success" role="alert">Candy Edited</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error editing Candy</div>';
   }
  
   break;
  case "Delete":
   if (deleteCandy($_POST['rid'])) {
    echo '<div class="alert alert-success" role="alert">Candy Deleted</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error deleting Candy</div>';
   }
  
   break;
 }
}


$candy = SelectCandy();
include "view-candy.php";
include "view-footer.php";
?>
