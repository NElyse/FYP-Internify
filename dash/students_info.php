<?php include "all_header.php";?>
<!-- start -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Students available at <?php echo $_SESSION['sc_name'];?></h5>
           <a href="promoted"><button type="button" class="btn btn-success m-1">View Promted</button></a>

              <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#add_students">Regist new</button><br><br>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle datatable-1 table table-bordered table-striped" id="data">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Sn</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Names</h6>
                        </th>

                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">parent/Guadian</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">parent phone</h6>
                        </th>
                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Reg number</h6>
                        </th>
                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">email</h6>
                        </th>
                  
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $i=1;
                       foreach (proj::students() as $value) {
                      ?>  
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $i;?></h6></td>
                        <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['st_fname'];?></span>  <span class="fw-normal"><?php echo $value['st_lname'];?></span>                          
                        </td>

                         <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['parent'];?></span>                          
                        </td>

                        <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['phone_number'];?></span>                          
                        </td>
                         <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['reg_number'];?></span>                          
                        </td>

                         <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['email'];?></span>                          
                        </td>


                        <td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit_<?php echo $value['stid'];?>">Edit</button>
                         <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#promote_<?php echo $value['stid'];?>">Accept</button></a>

                        </td>
                      </tr> 
                      <?php
                      include 'user_modal.php';
                      $i++;
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include 'footer.php';