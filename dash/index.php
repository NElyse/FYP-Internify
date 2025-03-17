<?php include 'all_header.php';
?>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 2 -->
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">List of internaships Application</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle datatable-1 table table-bordered table-striped" id="data">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Sn</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Student names</h6>
                        </th>
                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Co names</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Co address</h6>
                        </th>
                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">level/Class</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Co Contacts</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">App Decision</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $i=1;
                      foreach (proj::applied_intern() as $value) {
                        $app=$value['app_status'];
                      ?>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $i;?></h6></td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"> <?php echo $value['st_fname'];?> <?php echo $value['st_lname'];?></p>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?php echo $value['c_name'];?></h6>
                            <span class="fw-normal"><a href="<?php echo $value['comptence'];?>" title="View Competence" target="_blank">Competences</a></span>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"> <?php echo $value['c_district'];?>-<?php echo $value['c_sector'];?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $value['lev_name'];?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $value['c_contact'];?></p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <?php if ($app=='Approved') {
                              ?>
                               <span class="badge bg-success rounded-3 fw-semibold">Approved</span>
                               <?php
                            }
                            else{
                              ?><span class="badge bg-danger rounded-3 fw-semibold"><?php echo $app;?></span>
                              <?php
                            }
                            ?>

                            
                          </div>
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
        


      <?php include 'footer.php';
      ?>
     