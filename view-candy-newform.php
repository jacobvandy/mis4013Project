



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCandyModal">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus" viewBox="0 0 16 16">
  <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z"/>
  <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z"/>
  <path d="M8.5 6.5a.5.5 0 0 0-1 0V8H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V9H10a.5.5 0 0 0 0-1H8.5z"/>
</svg></button>

<!-- Modal -->
<div class="modal fade" id="newCandyModal" tabindex="-1" aria-labelledby="newCandyModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newCandyModalLabel">New Candy</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="">
        <div class="mb-3">
          <label for="cName" class="form-label">Candy Name  </label>
          <input type="text" class="form-control" id="cName" name="cName">
        </div>
        <div class="mb-3">
          <label for="cType" class="form-label"> Type  </label>
          <input type="text" class="form-control" id="cType" name="cType">
        </div>  
         <div class="mb-3">
          <label for="cPrice" class="form-label">Price  </label>
          <input type="text" class="form-control" id="cPrice" name="cPrice">
        </div>  
          <div class="mb-3">
          <label for="cManufacturerID" class="form-label">Manufacturer ID  </label>
          <input type="text" class="form-control" id="cManufacturerID" name="cManufacturerID">
        </div>  
        <input type="hidden" name="actionType" value="Add">
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
      </div>

    </div>
  </div>
</div>
