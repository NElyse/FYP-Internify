<?php include "all_header.php";?>
<!-- start -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Academic Year list</h5>
              <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#academic_year">Add new Academic Year</button>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle datatable-1 table table-bordered table-striped" id="data">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Sn</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Academic Year</h6>
                        </th>

                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Academic status</h6>
                        </th>
                  
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $i=1;
                       foreach (proj::academic() as $value) {
                        $year_status=$value['year_status'];
                      ?>  
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $i;?></h6></td>
                        <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['year_name'];?></span>                          
                        </td>
                        <?php if ($year_status=='Active') {
                          ?>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success rounded-3 fw-semibold">Active</span>
                          </div>
                        </td>
                        <?php
                      }
                      else{
                        ?>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-3 fw-semibold">Not Activate</span>
                          </div>
                        </td>
                        <?php

                      }
                      ?>
                      <td>
                          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#monitor_<?php echo $value['year_id'];?>">Monitor</button>
                          <a href="academics?delete=<?php echo $value['year_id'];?>"><button class="btn btn-danger">Remove</button></a>
                        </td>
            
                      </tr> 
                      <?php
                      include 'user_modal.php';
                      $i++;
                    }
                    if (isset($_GET['delete'])) {

                      $sele=$conn->query("SELECT * from students_info where year_id={$_GET['delete']}");
                      if (!mysqli_num_rows($sele)) {
                         $dele=$conn->query("DELETE FROM year where year_id={$_GET['delete']};");
                      if ($dele) {
                        ?>
                        <script>
                          window.alert("Removed success")
                          window.location.href='academics'
                        </script>
                        <?php
                      }
                      }
                      else{
                        ?>
                        <script>
                          window.alert("Please this data is already in use")
                          window.location.href='academics'
                        </script>
                        <?php
                      }
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