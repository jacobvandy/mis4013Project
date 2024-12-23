

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCandyModal<?php echo $candys['CandyID']; ?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editCandyModal<?php echo $candys['CandyID']; ?>" tabindex="-1" aria-labelledby="editCandyModalLabel<?php echo $candys['CandyID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editCandyModalLabel<?php echo $candys['CandyID']; ?>">Edit Candy</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="">
        <div class="mb-3">
          <label for="cName<?php echo $candys['CandyID']; ?>" class="form-label">Candy Name  </label>
          <input type="text" class="form-control" id="cName<?php echo $candys['CandyID']; ?>" name="cName" value="<?php echo $candys['Name']; ?>">
        </div>
        <div class="mb-3">
          <label for="cType<?php echo $candys['CandyID']; ?>" class="form-label">Candy Type  </label>
          <input type="text" class="form-control" id="cType<?php echo $candys['CandyID']; ?>" name="cType" value="<?php echo $candys['Type']; ?>">
        </div>  
         <div class="mb-3">
          <label for="cPrice<?php echo $candys['CandyID']; ?>" class="form-label">Price  </label>
          <input type="text" class="form-control" id="cPrice<?php echo $candys['CandyID']; ?>" name="cPrice"value="<?php echo $candys['Price']; ?>">
        </div>  
         </div>  
         <div class="mb-3">
          <label for="cManufacturerID<?php echo $candys['CandyID']; ?>" class="form-label">Price  </label>
          <input type="text" class="form-control" id="cManufacturerID<?php echo $candys['CandyID']; ?>" name="cManufacturerID"value="<?php echo $candys['ManufacturerID']; ?>">
        </div>  
        <input type="hidden" name="cid"value="<?php echo $candys['CandyID']; ?>">
        <input type="hidden" name="actionType" value="Edit">
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
      </div>

    </div>
  </div>
</div>
