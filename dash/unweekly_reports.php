<?php include "all_header.php";?>
<!-- start -->
<?php if (!isset($_SESSION['claid']) && !empty($_SESSION['week'])) {
  header("location:index");
}
else{
  $claid=$_SESSION['claid'];
  $week=$_SESSION['week'];
}
  ?>
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4"><?php echo $_SESSION['type'];?></h5>
              <a href="index"><button class="btn btn-outline-primary"> Back to home</button></a> <br><br>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle datatable-1 table table-bordered table-striped" id="data">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Week No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Student names</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Trade name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i=1;
                     
                       foreach (proj::check_reporting($_SESSION['type'],$claid,$week,'') as $value) {
                      ?>  
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $value['week'];?></h6></td>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $value['st_fname'];?> <?php echo $value['st_lname'];?></h6></td>

                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $value['lev_name'];?></h6></td>
                      </tr> 
                      <?php
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