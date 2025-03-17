<!-- Logout modal -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Logout...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Dear <b><?php echo $_SESSION['username'];?></b> are you ready to Logout from system?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="logout.php"><button type="button" class="btn btn-primary"><i class="ti ti-logout"> </i> Logout</button></a>
      </div>
    </div>
  </div>
</div>
<!-- end of logout -->



<div class="modal fade" id="upload_aip" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php" enctype="multipart/form-data">
          <label>Select file saved from your device</label>
          <input type="file" name="file-input" class="form-control" required><br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="aip_aggrement" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </form>
      </div>
    </div>
  </div>
</div>
<!-- weekly report -->

<div class="modal fade" id="weeklyreport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Weekly Report</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php" enctype="multipart/form-data">
          <label>Week number</label>
         <select name="week" class="form-control">
           <option selected disabled>select---</option>
           <option value="Week 1">Week 1</option>
           <option value="Week 2">Week 2</option>
            <option value="Week 3">Week 3</option>
            <option value="Week 4">Week 4</option>
         </select><br>
          <label>Select file saved from your device</label>
          <input type="file" name="file-input" class="form-control" required><br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="weeklyreport" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </form>
      </div>
    </div>
  </div>
</div>

<!-- self-Assement submission -->
<div class="modal fade" id="self_Assessment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Self Assessment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php" enctype="multipart/form-data">

           <label>Week number</label>
         <select name="week" class="form-control">
           <option selected disabled>select---</option>
           <option value="Week 1">Week 1</option>
           <option value="Week 2">Week 2</option>
            <option value="Week 3">Week 3</option>
            <option value="Week 4">Week 4</option>
         </select><br>
          <label>Select file saved from your device</label>
          <input type="file" name="file-input" class="form-control" required><br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="self_Assessment" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end of assement submission -->






