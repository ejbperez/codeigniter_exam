<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger hidden" id="alert" role="alert">
            All fields are required!
        </div>
    <!-- Material input --> 
        <div class="md-form">
            <input type="text" id="input1" class="form-control">
            <label for="input1">Firstname</label>
        </div>

        <div class="md-form">
            <input type="text" id="input2" class="form-control">
            <label for="input2">Lastname</label>
        </div>

        <div class="md-form">
            <input type="text" id="input3" class="form-control">
            <label for="input3">Position</label>
        </div>
    </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-success" id="save-data" >Save</button>
      </div>
    </div>
  </div>
</div>