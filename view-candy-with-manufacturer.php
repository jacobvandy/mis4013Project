<h1>Candy with Manufacturer</h1>
<div class="card-group">
  
    
 
      <?php
while ($candys = $candy->fetch_assoc()) {
  ?>
  <div class="card">
   
    <div class="card-body">
      <h5 class="card-title"><?php echo $candys['CandyName']; ?></h5>
      <p class="card-text">
        <ul class="list-group">
        <?php
        $manu = SelectManufacturerByCandy($candys['CandyID']);
        while ($manus = $manu->fetch_assoc()) {
          ?>
          <li class="list-group-item"><?php echo $manus['ManuName']; ?> - <?php echo $manus['CandyName']; ?> - <?php echo $manus['Price']; ?> - <?php echo $manus['Country']; ?> </li>

          <?php
        }
          
        ?>
          </ul>
        </p>
      <p class="card-text"><small class="text-body-secondary">Candy Type/ID: <?php echo $candys['Type']; ?></small></p>
    </div>
  </div>

      <?php
}
?>
</div>
