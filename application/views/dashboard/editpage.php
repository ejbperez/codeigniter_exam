
<div class="modal fade" id="editpage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
        <div class="alert alert-danger hidden alert" id="alert" role="alert">
            All fields are required!
        </div>
    <!-- Material input --> 
        <input type="text" id="id" class="form-control mb-4 hidden">
        <label for="edit-input1">Firstname</label>
        <input type="text" id="edit-input1" class="form-control mb-4">

        <label for="edit-input2">Lastname</label>
        <input type="text" id="edit-input2" class="form-control mb-4">

        <label for="edit-input3">Position</label>
        <input type="text" id="edit-input3" class="form-control mb-4">
    </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-success" id="update-data" >Save</button>
      </div>
    </div>
  </div>
</div>