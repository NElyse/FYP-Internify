<!-- Logout modal -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Logout...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Dear <b><?php echo $_SESSION['c_name'];?></b> are you ready to Logout from system?
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Attach Student Self-Assessment Sheet</h1>
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

<!-- daily Reports -->
<div class="modal fade" id="check_report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">submited reports need to Approve</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php">
          <label>Choose Faculity:</label>
         <select name="faculity" class="form-control" required>
          <option selected disabled>Select--</option>
          <?php
          foreach (proj::faculity() as $values) {
           ?>
           <option value="<?php echo $values['trade_id'];?>"><?php echo $values['trade_name'];?></option>
           <?php
          }
          ?>
         </select><br>

         <label>  choose Kind of report you want to check</label>
         <select name="type" class="form-control" required>
          <option selected disabled>choose..</option>
           <option value="weeklyreport"> Weekly Reports</option>
           <option value="IAP Agreement">Competence to be covered</option>
           <option value="self_Assessment"> Students Self Assement reports</option>
         </select>
         <label>Choose Week</label>
           <select name="week" class="form-control">
           <option selected disabled>select---</option>
           <option value="Week 1">Week 1</option>
           <option value="Week 2">Week 2</option>
            <option value="Week 3">Week 3</option>
            <option value="Week 4">Week 4</option>
         </select><br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submited_report" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- chamge password -->
<div class="modal fade" id="change_password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Change Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash">
          <label>Your Old Password</label>
          <input type="password" name="old_pass" class="form-control" required placeholder="*********">
          <br>
          <label>Your new Password</label>
          <input type="password" name="n_pass" class="form-control" required placeholder="*********"> <br>
           <label>Your confrim Password</label>
          <input type="password" name="c_pass" class="form-control" required placeholder="*********">
          

      </div>
      <div class="modal-footer">
        <button type="submit" name="change_password" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end chamnge passpowrd -->




