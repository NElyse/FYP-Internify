<?php include "all_header.php";?>
<!-- start -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Student Self-Assessment Sheet </p>
                 <a href="../template/company_self_assessment_self_90098.docx"><button type="button" class="btn btn-success m-1">Download Template(docx file).</button></a><br>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle datatable-1 table table-bordered table-striped" id="data">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Sn</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Students names</h6>
                        </th>
                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $i=1;
                      foreach (proj::check_applied($_SESSION['userid']) as $value) {
                        $data=proj::company_reports($value['stu_id'],'Company_Self_Assessment');
                        $app=mysqli_num_rows($data);
                        ?>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $i;?></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?php echo $value['st_fname'];?> <?php echo $value['st_lname'];?></h6>
                            <span class="fw-normal"><a href="<?php echo $value['comptence'];?>" title="View Competence" target="_blank">view Competences</a></span>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <?php if ($app==1) {
                              ?>
                               <span class="badge bg-success rounded-3 fw-semibold">Attached <?php echo $app;?></span>
                               <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add_<?php echo $value['stu_id'];?>"> Attachement</button>
                               <?php
                            }
                            else{
                              ?><span class="badge bg-warning rounded-3 fw-semibold"><?php echo $app;?></span>
                              <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add_<?php echo $value['stu_id'];?>"> Attachement</button>
                              <?php
                            }
                            ?>

                          </div>
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