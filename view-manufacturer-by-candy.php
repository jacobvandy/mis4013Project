<h1>Manufacturer by Candy</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ManufacturerID</th>
    <th>Candy Name</th>
    <th>Country</th>
    <th>Manufacturer Name</th>
    <th>Price</th>

    </tr>
    
  </thead>
    <tbody>
      <?php
while ($manus = $manu->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $manus['ManufacturerID']; ?></td>
  <td><?php echo $manus['CandyName']; ?></td>
  <td><?php echo $manus['Country']; ?></td>
  <td><?php echo $manus['ManuName']; ?></td>
  <td><?php echo $manus['Price']; ?></td>

</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
