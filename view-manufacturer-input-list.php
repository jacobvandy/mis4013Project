<select class="form-select" id = "mid" name = "mid">
<?php 
while ($ManuItem = $ManuList->fetch_assoc()) {
$selText = "";
if ($selectedManu == $ManuItem['ManufacturerID']) {
   $selText = "selected";
}
?>
   <option value="<?php echo $ManuItem['ManufacturerID']; ?>" <?=$selText?> ><?php echo $ManuItem['Name']; ?></option>
<?php  
}
?>

</select>
