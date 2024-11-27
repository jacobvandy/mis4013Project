<div class= "row">
  <div class = "col">
    <h1>Candy</h1>
  </div>
  <div class = "col-auto">
    <?php
include "view-candy-newform.php";
?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th>CandyID</th>
    <th>Name</th>
    <th>Type</th>
    <th>Price</th>
      <th>ManufacturerID</th>
      <th></th>
      <th></th>
    </tr>
    
  </thead>
    <tbody>
      <?php
while ($candys = $candy->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $candys['CandyID']; ?></td>
  <td><?php echo $candys['Name']; ?></td>
  <td><?php echo $candys['Type']; ?></td>
  <td><?php echo $candys['Price']; ?></td>
    <td><?php echo $candys['ManufacturerID']; ?></td>
  <td>
    <form method="post" action="">
  <input type="hidden" name="cid" value="<?php echo $candys['CandyID']; ?>">
  <input type="hidden" name="actionType" value="Delete">
  <button type="submit" class="btn btn-primary" onclick="return confirm('Confirm Changes?');">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg>
  </button>
</form>
  </td>
  <td>
      <?php
include "view-candy-editform.php";
?>
  </td>
  <td><a href="manufacturer-by-candy.php?id=<?php echo $candys['CandyID']; ?>">Manufacturers</a></td>

</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
