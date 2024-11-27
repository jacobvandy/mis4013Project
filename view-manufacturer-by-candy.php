<h1>Manufacturer by Candy</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ManufacturerID</th>
    <th>Name</th>
    <th>Country</th>
    
      

    </tr>
    
  </thead>
    <tbody>
      <?php
while ($manus = $manu->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $manus['ManufacturerID']; ?></td>
  <td><?php echo $manus['Name']; ?></td>
  <td><?php echo $manus['Country']; ?></td>

</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
