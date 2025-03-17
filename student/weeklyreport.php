<?php include "all_header.php";?>
<!-- start -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Weekly Report</p>
                 <a href="../template/Weeklyreportsheet.docx"><button type="button" class="btn btn-success m-1">Download Template(docx file).</button></a><br>

              <button type="button" class="btn btn-outline-primary m-1" data-bs-toggle="modal" data-bs-target="#weeklyreport">Upload Template(PDF file).</button><br>

                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle datatable-1 table table-bordered table-striped" id="data">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Week No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">file</h6>
                        </th>

                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Submited date</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i=1;
                       foreach (proj::uploaded($_SESSION['userid'],'weeklyreport') as $value) {
                      ?>  
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $value['week'];?></h6></td>
                        <td class="border-bottom-0">
                            <span class="fw-normal"><a href="<?php echo $value['file_name'];?>"> <?php echo $value['type']." ".$i;?><i class="ti ti-file"></i></a>
                            </span>                         
                        </td>
                         <td class="border-bottom-0">
                            <span class="fw-normal"><?php echo $value['date_time'];?>
                            </span>                         
                        </td>
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