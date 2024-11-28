<h1>Candy with Manufacturer</h1>
<div class="card-group">
  
    
 
      <?php
while ($manus = $manu->fetch_assoc()) {
  ?>
  <div class="card">
   
    <div class="card-body">
      <h5 class="card-title"><?php echo $manus['ManuName']; ?></h5>
      <p class="card-text">
        <ul class="list-group">
        <?php
        $candy = SelectManufacturerByCandy($manus['ManufacturerID']);
        while ($candys = $candy->fetch_assoc()) {
          ?>
          <li class="list-group-item"><?php echo $candys['CandyID']; ?> - <?php echo $candys['CandyName']; ?> - <?php echo $candys['Price']; ?> - <?php echo $candys['ManufacturerID']; ?> - <?php echo $candys['Country']; ?> - <?php echo $candys['Type']; ?></li>

          <?php
        }
          
        ?>
          </ul>
        </p>
      <p class="card-text"><small class="text-body-secondary">Manufacturer Country: <?php echo $manus['Country']; ?></small></p>
    </div>
  </div>

      <?php
}
?>
</div>
