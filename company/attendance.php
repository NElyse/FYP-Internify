<?php include "all_header.php";?>
<!-- start -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">attendance Sheets</h5>
                <a href="index"><button class="btn btn-secondary">Generate new</button></a>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle datatable-1 table table-bordered table-striped" id="data">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Week</h6>
                        </th>

                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Student's Names</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Day</h6>
                        </th>

                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Date</h6>
                        </th>

                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">time in</h6>
                        </th>

                          <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">time out</h6>
                        </th>

                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Decision</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i=1;
                       foreach (proj::attendance('','','') as $value) {
                      ?>  
                      <tr>
                        <p><td><?php echo $value['week'];?></td></p>
                        <p><td><?php echo $value['st_fname']." ".$value['st_lname'];?></td></p>
                        <td><?php echo $value['day_s'];?></td>
                        <td><?php echo $value['date_time'];?></td>
                        <td><?php echo $value['time_in'];?></td>
                         <td><?php echo $value['time_out'];?></td>
                       <td><?php echo $value['desci'];?></td>
                        </tr>
                       
                      <?php
                      // include 'user_modal.php';
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