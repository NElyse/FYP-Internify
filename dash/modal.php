<!-- Logout modal -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Logout...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Dear <b><?php echo $_SESSION['lname'];?></b> are you ready to Logout from system??
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="logout.php"><button type="button" class="btn btn-primary"><i class="ti ti-logout"> </i> Logout</button></a>
      </div>
    </div>
  </div>
</div>
<!-- end of logout -->



<div class="modal fade" id="academic_year" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Academics Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php">
          <label>Enter in Academic year</label>
          <input type="text" name="academic_year_name" class="form-control" required placeholder="ex:2020-2000">
      </div>
      <div class="modal-footer">
        <button type="submit" name="academic_year" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </form>
      </div>
    </div>
  </div>
</div>


<!-- faculities -->
<div class="modal fade" id="faculity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Faculities availabel at <?php echo $_SESSION['sc_name'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php">
          <label>Enter in Sector:</label>
          <input type="text" name="sector" class="form-control" required placeholder="Sector"><br>

          <label>Enter in Faculity:</label>
          <input type="text" name="faculity" class="form-control" required placeholder="Faculity...."><br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="add_faculity" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end of faculity -->



<!-- add levels -->
<div class="modal fade" id="levels" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">levels at <?php echo $_SESSION['sc_name'];?></h1>
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

          <label>Level/Promotion:</label>
          <input type="text" name="promotion" class="form-control" required placeholder="example: Level 6 IT Year one...."><br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="add_level" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end of levels -->



<!-- students -->
<div class="modal fade" id="add_students" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Students registration at <?php echo $_SESSION['sc_name'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <form method="POST" action="server_dash.php">
      </div>
      <div class="modal-body">
        <label>First name</label>
        <input type="text" name="fname" class="form-control" required placeholder="First name"> <br>

         <label>last name</label>
        <input type="text" name="lname" class="form-control" required placeholder="second name"> <br>

         <label>Parent/Guadian names</label>
        <input type="text" name="parent_name" class="form-control" required  placeholder="Guadian/Parent names"> <br>

         <label>Student/Parent phone number:</label>
        <input type="text" name="parent_phone" class="form-control" required placeholder="phone number"> <br>

         <label>Reg number (optional)</label>
        <input type="text" name="reg_number" class="form-control" placeholder="reg numbers"> <br>
        <label>Email (optional)</label>
        <input type="email" name="email" class="form-control" placeholder="email address"> <br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="add_students" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end of students -->

<!-- companies registrations -->
<div class="modal fade" id="companies" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Company Registrations at <?php echo $_SESSION['sc_name'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <form method="POST" action="server_dash.php">
      </div>
      <div class="modal-body">
        <label>Company names <i style="color: red">*</i></label>
        <input type="text" name="c_name" class="form-control" required placeholder="Company names here...."> <br>

         <label>Supervisor names:<i style="color: red">*</i></label>
        <input type="text" name="super_name" class="form-control" required placeholder="Supervisor names"> <br>

        <label>Contacts<i style="color: red">*</i></label>
        <input type="text" name="c_contact" class="form-control" required placeholder="Phone number"> <br>

         <label>Email<i style="color: red;">*</i></label>
        <input type="text" name="email" class="form-control" required placeholder="email address"> <br>

       <p>Province <i style="color: red">*</i>:
      <select name="province"  id="province" onchange="showResult();" class="form-control" autocomplete="nope" required ="required"  oninvalid="this.setCustomValidity('Please Select Province')"
                      oninput="this.setCustomValidity('')">
                      <option value="">----Select province----</option>
                          <option value="Northern Province">Northern Province</option>
                              <option value="Western Province">Western Province</option>
                              <option value="Kigali City">Kigali City</option>
                              <option value="Eastern Province">Eastern Province</option>
                              <option value="Southern Province">Southern Province</option>
                                
                             </select> </p>  
       <p>District <i style="color: red">*</i>:
      <select name="district"  id = "district" class="form-control" onchange="showResult2();" autocomplete="nope" required ="required"  oninvalid="this.setCustomValidity('Please Select District')"
                      oninput="this.setCustomValidity('')">
                 <option>----District----</option>
                 </select> </p>


       <p>Sector <i style="color: red">*</i>:
      <select name="sector"  id = "district"  onchange="showResult3();" class="form-control" autocomplete="nope" required ="required"  oninvalid="this.setCustomValidity('Please Select Sector')"
                      oninput="this.setCustomValidity('')">
          <option>----Sector----</option>
           </select></p>
      </div>
      <div class="modal-footer">
        <button type="submit" name="add_company" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end of company registration -->

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
<!-- end change passpowrd -->



<!--  weekly report-->
<!-- add levels -->
<div class="modal fade" id="check_weekly" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Check Un submited reports at <?php echo $_SESSION['sc_name'];?></h1>
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
        <button type="submit" name="check" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end of levels -->

<!-- end of  weekly report -->


<!-- daily Reports -->
<div class="modal fade" id="check_report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">submited reports at <?php echo $_SESSION['sc_name'];?></h1>
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
<!-- end of Reports -->


<!-- checking Attendance -->
<!-- daily Reports -->
<div class="modal fade" id="check_attendance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Attendance reports at <?php echo $_SESSION['sc_name'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="server_dash.php">
          <label>Choose level/Promotion:</label>
         <select name="level" class="form-control" required>
          <option selected disabled>Select--</option>
          <?php
          foreach (proj::levels() as $values) {
           ?>
           <option value="<?php echo $values['lev_id'];?>"><?php echo $values['lev_name'];?></option>
           <?php
          }
          ?>
         </select><br>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submited_attendace" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end of Attendance -->