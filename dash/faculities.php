<?php include "all_header.php";?>
<!-- start -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Available Faculities at <?php echo $_SESSION['sc_name'];?></h5>
              <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#faculity">Regist new</button>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle datatable-1 table table-bordered table-striped" id="data">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Sn</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Sector</h6>
                        </th>

                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Faculity name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $i=1;
                       foreach (proj::faculity() as $value) {
                      ?>  
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $i;?></h6></td>
                        <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['sector'];?></span>                          
                        </td>
                        <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['trade_name'];?></span>                          
                        </td>

                         <td>
                          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#trade_<?php echo $value['trade_id'];?>">Modify</button>
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