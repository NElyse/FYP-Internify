<?php include "all_header.php";?>
<!-- start -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Companies available at <?php echo $_SESSION['sc_name'];?></h5>
              <p>Please Click to Create button to add internaship to the specific company</p>
              <button type="button" class="btn btn-outline-primary m-1" data-bs-toggle="modal" data-bs-target="#companies">Regist new</button><br>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle datatable-1 table table-bordered table-striped" id="data">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Sn</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Co Names</h6>
                        </th>

                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">person to contact</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Phone number</h6>
                        </th>
                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Address</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $i=1;
                       foreach (proj::company() as $value) {
                      ?>  
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $i;?></h6></td>
                        <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['c_name'];?></span>                         
                        </td>

                         <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['super_name'];?></span>                          
                        </td>

                        <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['c_contact'];?></span>                           
                        </td>
                         <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['c_district'];?></span>-<span class="fw-normal"><?php echo $value['c_sector'];?></span>                          
                        </td>

                         <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['c_email'];?></span>                          
                        </td>
                        <td>
                         <button class="btn btn-success" title="Add internaship to <?php echo $value['c_name'];?>" data-bs-toggle="modal" data-bs-target="#add_<?php echo $value['c_id'];?>">Create</button></a>
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