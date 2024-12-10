<div class= "row">
  <div class = "col">
    <h1>Candy with Manufacturer</h1>
  </div>
  <div class = "col-auto">
    
 <?php
include "view-candy-with-manufacturer-newform.php";
?>

</div>
</div>
<div class="card-group">
  
    
 
      <?php
while ($candys = $candy->fetch_assoc()) {
  ?>
  <div class="card">
   
    <div class="card-body">
      <h5 class="card-title"><?php echo $candys['Name']; ?></h5>
      <p class="card-text">
        <ul class="list-group">
        <?php
        $manu = SelectManufacturerByCandy($candys['CandyID']);
        while ($manus = $manu->fetch_assoc()) {
          ?>
          <li class="list-group-item"><?php echo $manus['ManufacturerID']; ?> - <?php echo $manus['ManuName']; ?> - <?php echo $manus['CandyName']; ?> - <?php echo $manus['Price']; ?> - <?php echo $manus['Country']; ?> - <?php echo $manus['CandyID']; ?>  </li>
         <form method="post" action="">
                <input type="hidden" name="cid" value="<?php echo $manus['CandyID']; ?>">
                <input type="hidden" name="actionType" value="Delete">
                <button type="submit" class="btn btn-primary" onclick="return confirm('Confirm Changes?');">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
              </svg>
                </button>
              </form>
          
  <?php
include "view-candy-with-manufacturer-editform.php";
?>
            </li>
          <?php
        }
          
        ?>
          </ul>
        </p>
      <p class="card-text"><small class="text-body-secondary">Candy Type/ID: <?php echo $candys['Type']; ?> - <?php echo $candys['CandyID']; ?></small></p>
    </div>
  </div>

      <?php
}
?>
</div>
