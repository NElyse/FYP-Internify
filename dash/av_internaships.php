<?php include "all_header.php";?>
<!-- start -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Internship available at <?php echo $_SESSION['sc_name'];?></h5>
              <p>Please Click to remove button to remove internaship to the specific company</p>
              <a href="companies" title="Back to home"><button type="button" class="btn btn-outline-primary m-1">Back</button></a><br>
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
                          <h6 class="fw-semibold mb-0">Faculity</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Available place</h6>
                        </th>
                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Duration</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Contacts</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $i=1;
                       foreach (proj::internaship() as $value) {
                      ?>  
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $i;?></h6></td>
                        <td class="border-bottom-0">
                            <span class="fw-normal"><a href="<?php echo $value['comptence'];?>" title="<?php echo $value['comptence'];?>" target="_blank"><?php echo $value['c_name'];?></a> </span>                         
                        </td>

                         <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['trade_name'];?></span>                          
                        </td>

                        <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['places'];?></span>                           
                        </td>
                         <td class="border-bottom-0">
                            <span class="fw-normal">From <?php echo $value['start_date'];?></span> to <span class="fw-normal"><?php echo $value['end_date'];?></span>                          
                        </td>

                         <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['c_contact'];?></span>                          
                        </td>
                        <td>
                          <button class="btn btn-success" title="top up internaship to <?php echo $value['c_name'];?>" data-bs-toggle="modal" data-bs-target="#topup_<?php echo $value['av_id'];?>">Top up</button></a>
                         <button class="btn btn-danger" title="Remove internaship to <?php echo $value['c_name'];?>" data-bs-toggle="modal" data-bs-target="#remove_<?php echo $value['av_id'];?>">Remove</button></a>
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