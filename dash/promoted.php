<?php include "all_header.php";?>
<!-- start -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">promoted students <?php echo $_SESSION['sc_name'];?></h5>
        
              <a href="students_info"><button type="button" class="btn btn-success m-1">Back</button></a>
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
                          <h6 class="fw-semibold mb-0">Level</h6>
                        </th>
                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">faculity</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i=1;
                       foreach (proj::promoted($_SESSION['yid']) as $value) {
                      ?>  
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $i;?></h6></td>
                        <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['st_fname'];?></span>  <span class="fw-normal"><?php echo $value['st_lname'];?></span>                          
                        </td>

                         <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['lev_name'];?></span>                          
                        </td>

                        <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['trade_name'];?></span>                          
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