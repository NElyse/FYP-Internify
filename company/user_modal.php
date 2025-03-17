<div class="modal fade" id="monitor_<?php echo $value['ap_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Choose Action you want</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php">
          <label>Select Options</label>
         <select name="app_status" class="form-control" onchange="this.form.submit()">
           <option selected disabled>select---</option>
           <option value="Approved">Approve</option>
           <option value="Rejected">Reject</option>
         </select><br>
      </div>
      <input type="hidden" name="ap_id" value="<?php echo $value['ap_id'];?>">
       <input type="hidden" name="email" value="<?php echo $value['email'];?>">
        <input type="hidden" name="phone_number" value="<?php echo $value['phone_number'];?>">
         <input type="hidden" name="name" value="<?php echo $value['st_fname'];?>">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </form>
      </div>
    </div>
  </div>
</div>
<!-- monitor trade -->

<div class="modal fade" id="add_<?php echo $value['stu_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Student Self-Assessment </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php" enctype="multipart/form-data">
          <label>Choose Week</label>
         <select name="week" class="form-control">
           <option selected disabled>select---</option>
           <option value="Week 1">Week 1</option>
           <option value="Week 2">Week 2</option>
            <option value="Week 3">Week 3</option>
            <option value="Week 4">Week 4</option>
         </select><br>
      <input type="hidden" name="stu_id" value="<?php echo $value['stu_id'];?>">
       <input type="hidden" name="email" value="<?php echo $value['email'];?>">
        <input type="hidden" name="phone_number" value="<?php echo $value['phone_number'];?>">
         <input type="hidden" name="name" value="<?php echo $value['st_fname'];?>">
         <label>Attach file(pdf)</label>
         <input type="file" name="file-input" required class="form-control"></div>
       <div class="modal-footer">
        <button type="submit" name="send_submition" class="btn btn-primary">Confirm</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- monitor trade -->


<!-- monitor trade -->
<div class="modal fade" id="Evaluation_form_<?php echo $value['stu_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">IA Evaluation Form </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php" enctype="multipart/form-data">
          <label>Choose Week</label>
         <select name="week" class="form-control">
           <option selected disabled>select---</option>
           <option value="Week 1">Week 1</option>
           <option value="Week 2">Week 2</option>
            <option value="Week 3">Week 3</option>
            <option value="Week 4">Week 4</option>
         </select><br>
    
      <input type="hidden" name="stu_id" value="<?php echo $value['stu_id'];?>">
       <input type="hidden" name="email" value="<?php echo $value['email'];?>">
        <input type="hidden" name="phone_number" value="<?php echo $value['phone_number'];?>">
         <input type="hidden" name="name" value="<?php echo $value['st_fname'];?>">
         <label>Attach file(pdf)</label>
         <input type="file" name="file-input" required class="form-control"></div>
       <div class="modal-footer">
        <button type="submit" name="Evaluation_form" class="btn btn-primary">Confirm</button>

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </form>
      </div>
    </div>
  </div>
</div>
<!-- monitor trade -->

<!-- attendace -->
<div class="modal fade" id="att_<?php echo $value['stu_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Make Attendace </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php" enctype="multipart/form-data">
          <label>Choose Week</label>
         <select name="week" class="form-control">
           <option selected disabled>select---</option>
           <option value="Week 1">Week 1</option>
           <option value="Week 2">Week 2</option>
            <option value="Week 3">Week 3</option>
            <option value="Week 4">Week 4</option>
         </select><br>
        <input type="hidden" name="stu_id" value="<?php echo $value['stu_id'];?>">
        <label>Time in <i style="color:red;"></i></label>
         <input type="time" name="time_in" class="form-control" required><br>
         <label>Time out</label>
         <input type="time" name="time_out" class="form-control" required><br>

         <label>Decision</label>
         <select name="task" class="form-control">
           <option selected disabled>select---</option>
           <option value="Present">Present</option>
           <option value="Absent">Absent</option>
         </select><br>
        <div class="modal-footer">
        <button type="submit" name="attendance" class="btn btn-primary">Confirm</button>

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div></form></div></div></div></div>
<!-- end of Attendance -->


<!-- attendace -->
<div class="modal fade" id="appro_<?php echo $value['re_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Company Report Monitoring Report</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php" enctype="multipart/form-data">
         <label>Choose Decision</label>
         <select name="task" class="form-control">
           <option selected disabled>select---</option>
           <option value="Approved">Approve</option>
           <option value="Rejected">Reject</option>
         </select><br>
         <input type="hidden" name="id" value="<?php echo $value['re_id'];?>">
        <div class="modal-footer">
        <button type="submit" name="Approve_report" class="btn btn-primary">Confirm</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
