<div class="modal fade" id="monitor_<?php echo $value['year_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Choose Action you want</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php">
          <label>Select Options</label>
         <select name="choose_actions" class="form-control" onchange="this.form.submit()">
           <option selected disabled>select---</option>
           <option value="Disactive">Disactivate</option>
           <option value="Active">Activate</option>
         </select>
      </div>
      <input type="hidden" name="year_id" value="<?php echo $value['year_id'];?>">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </form>
      </div>
    </div>
  </div>
</div>
<!-- monitor trade -->

<!-- faculities -->
<div class="modal fade" id="trade_<?php echo $value['trade_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Faculities at <?php echo $_SESSION['sc_name'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form method="POST" action="server_dash.php">
          <label>Sector:</label>
          <input type="text" name="sector" class="form-control" required placeholder="Sector" value="<?php echo $value['sector'];?>"><br>
          <input type="hidden" name="id" value="<?php echo $value['trade_id'];?>">

          <label>Faculity:</label>
          <input type="text" name="faculity" class="form-control" required placeholder="Faculity...." value="<?php echo $value['trade_name'];?>"><br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="edit_faculity" class="btn btn-primary">Confrim</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end monitor trade -->
<!-- editing stund info -->

<!-- end of students info -->
<div class="modal fade" id="edit_<?php echo $value['stid'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Students Modify at <?php echo $_SESSION['sc_name'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <form method="POST" action="server_dash.php">
      </div>
      <div class="modal-body">
        <label>First name</label>
        <input type="text" name="fname" class="form-control" value="<?php echo $value['st_lname'];?>" required> <br>
        <input type="hidden" name="id" value="<?php echo $value['stid'];?>">
         <label>last name</label>
        <input type="text" name="lname" value="<?php echo $value['st_lname'];?>" class="form-control" required> <br>

         <label>Parent/Guadian names</label>
        <input type="text" name="parent_name" class="form-control" value="<?php echo $value['parent'];?>" required> <br>

         <label>Student/Parent phone number:</label>
        <input type="text" name="parent_phone" class="form-control" required value="<?php echo substr($value['phone_number'],3);?>"> <br>

         <label>Reg number (optional)</label>
        <input type="text" name="reg_number" class="form-control" required value="<?php echo $value['reg_number'];?>"> <br>
        <label>Email (optional)</label>
        <input type="email" name="email" class="form-control" required value="<?php echo $value['email'];?>"> <br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="edit_students" class="btn btn-primary">Confrim</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end of students -->



<!-- promotting students-->
<div class="modal fade" id="promote_<?php echo $value['stid'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Promote <?php echo $value['st_fname'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <form method="POST" action="server_dash.php">
      </div>
      <div class="modal-body">
        <label>Choose Faculity:</label>
        <input type="hidden" name="id" value="<?php echo $value['stid'];?>">
       <select class="form-control" name="faculity">
       <option selected disabled>select--</option>
       <?php 
       foreach (proj::faculity() as $key) {
        ?>
        <option value="<?php echo $key['trade_id'];?>"><?php echo $key['trade_name'];?></option>
        <?php
        } 
       ?>
        </select><br>

    <label>Choose Level/Class</label>
    <select name="level" class="form-control">
      <option selected disabled>select--</option>
       <?php 
       foreach (proj::levels() as $key) {
        ?>
        <option value="<?php echo $key['lev_id'];?>"><?php echo $key['lev_name']." ".$key['trade_name'];?></option>
        <?php
        } 
       ?>
        </select><br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="promote_student" class="btn btn-primary">Confrim</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end of promotting students -->



<!-- internaship top up -->
<div class="modal fade" id="add_<?php echo $value['c_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Internaships availabe in <?php echo $value['c_name'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <form method="POST" action="server_dash.php" enctype="multipart/form-data">
      </div>
      <div class="modal-body">
          <label>Choose faculity <i style="color:red">*</i></label>
    <select name="level" class="form-control">
      <option selected disabled>select--</option>
       <?php 
       foreach (proj::faculity() as $key) {
        ?>
        <option value="<?php echo $key['trade_id'];?>"><?php echo $key['trade_name'];?></option>
        <?php
        } 
       ?>
        </select><br>
        <label>Available Places:<i style="color:red"> *</i>:</label>
        <input type="hidden" name="c_id" value="<?php echo $value['c_id'];?>">
         <input type="number" name="number" class="form-control" placeholder="Available places in ex: 23 <?php echo $value['c_name'];?>"> <br>
  
        <label>Starting Date <i style="color:red">*</i></label>
        <input type="date" name="start_date" class="form-control" required><br>

           <label>Ending Date <i style="color:red">*</i> </label>
        <input type="date" name="end_date" class="form-control" required><br>


        <label>Add Competence <i style="color:red">*</i>:</label>
        <input type="file" name="file-input" class="form-control" required>
      </div>
      <div class="modal-footer">
        <button type="submit" name="add_internaship" class="btn btn-primary">Confrim</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end of internaship top up -->


<!-- remove this internaship -->
<div class="modal fade" id="remove_<?php echo $value['av_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Internaships availabe in <?php echo $value['c_name'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <form method="POST" action="server_dash?delete=<?php echo $value['av_id'];?>">
      </div>
      <div class="modal-body">
       Are you sure to remove this internship??
      </div>
      <div class="modal-footer">
        <button type="submit" name="remove" class="btn btn-primary">Confrim</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- remove this internahips -->


<!-- remove this internaship -->
<div class="modal fade" id="topup_<?php echo $value['av_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Top up Internaships to <?php echo $value['trade_name'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <form method="POST" action="server_dash" enctype="multipart/form-data">
      </div>
      <div class="modal-body">
        <label>Current Places</label>
        <input type="text" name="current_qty" class="form-control" value="<?php echo $value['places'];?>" readonly><br>
        <input type="hidden" name="av_id" value="<?php echo $value['av_id'];?>">

        <label>New Places:</label>
        <input type="number" name="np" class="form-control" required placeholder="how many places you want to add? to <?php echo $value['c_name'];?>"><br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="top_up" class="btn btn-primary">Confrim</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- remove this internahips -->

<!-- edit Levels -->
<div class="modal fade" id="editlevel_<?php echo $value['lev_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modify this <?php echo $value['trade_name'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <form method="POST" action="server_dash" enctype="multipart/form-data">
      </div>
      <div class="modal-body">
        <label>Edit names</label>
        <input type="text" name="lev_name" class="form-control" value="<?php echo $value['lev_name'];?>"><br>
        <input type="hidden" name="lev_id" value="<?php echo $value['lev_id'];?>">
        <input type="hidden" name="trade_id" value="<?php echo $value['trade_id'];?>">
      <div class="modal-footer">
        <button type="submit" name="edit_level_names" class="btn btn-primary">Confrim</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end edit levels -->