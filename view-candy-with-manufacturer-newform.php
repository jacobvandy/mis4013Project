

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCWMModal">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus" viewBox="0 0 16 16">
  <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z"/>
  <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z"/>
  <path d="M8.5 6.5a.5.5 0 0 0-1 0V8H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V9H10a.5.5 0 0 0 0-1H8.5z"/>
</svg></button>

<!-- Modal -->
<div class="modal fade" id="newCWMModal" tabindex="-1" aria-labelledby="newCWMModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newCWMModalLabel">New Candy with Manufacturer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="">
        <div class="mb-3">
          <label for="mid" class="form-label">Manufacturer ID</label>
          <input type="text" class="form-control" id="mid" name="mid">
        </div>

           <div class="mb-3">
          <label for="mid" class="form-label">Manufacturer</label>

      <?php
        $ManuList = SelectManuForInput();
        $selectedManu = 0;
        include "view-manufacturer-input-list.php";
      ?>
          
      
        <div class="mb-3">
          <label for="cName" class="form-label">Candy Name</label>
          <input type="text" class="form-control" id="cName" name="cName">
        </div>  
         <div class="mb-3">
          <label for="cPrice" class="form-label">Price</label>
          <input type="text" class="form-control" id="cPrice" name="cPrice">
        </div>  

        <div class="mb-3">
          <label for="mCountry" class="form-label">Country </label>
          <input type="text" class="form-control" id="mCountry" name="mCountry">
        </div>  

              <div class="mb-3">
          <label for="cid" class="form-label">CandyID </label>
          <input type="text" class="form-control" id="cid" name="cid">
        </div>  
         
        
        <input type="hidden" name="actionType" value="Add">
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
      </div>

    </div>
  </div>
</div>
