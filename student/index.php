<?php include 'all_header.php';
?>
      <!--  Header End -->
      <div class="container-fluid">
        <?php
        $check=proj::check_stage($_SESSION['userid']);
        $check_data=mysqli_num_rows($check);
        if ($check_data==0) {
         ?>
         <div class="row">
          <?php 
          foreach (proj::internaship($_SESSION['trade']) as $key) {
            $seat=$key['places'];
            $img=$key['c_logo'];
           ?>
          <div class="col-sm-6 col-xl-4">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <?php if (empty($img)) {
                  ?>
                 <a href="javascript:void(0)"><img src="../assets/images/products/logo_company.png" class="card-img-top rounded-0" alt="..."></a>
                 <?php
                } 
                else{
                  ?>
                  <a href="javascript:void(0)"><img src="<?php echo $value['c_logo'];?>" class="card-img-top rounded-0" alt="..."></a>
                  <?php
                }
                ?>
                            </div>
              <div class="card-body pt-3 p-4">
                <h5 class="fw-semibold fs-4"><?php echo $key['c_name'];?></h5> <h6><b>Location:</b> <?php echo $key['c_district']."-".$key['c_sector'];?><br>
                  <b>Contacts:</b> <?php echo $key['c_contact'];?></h6>
                  <b>Duration:</b> <?php echo $key['start_date'];?> to <?php echo $key['end_date'];?> </h6>
                <div class="d-flex align-items-center justify-content-between">
                  <?php
                   if ($seat>=1) {
                    ?>
                  <span class="badge bg-success rounded-3 fw-semibold">Available <?php echo $seat;?></span><br>
                 <form method="POST" action="server_dash">
                   <input type="hidden" name="av_id" value="<?php echo $key['av_id'];?>">
                     <input type="hidden" name="place" value="<?php echo $key['places'];?>">
                   <input type="hidden" name="stu_id" value="<?php echo $_SESSION['userid'];?>">
                <button type="submit" name="apply_intern" class="btn btn-primary" style="width:100%">Apply now</button>
                 </form>
                
                    <?php
                  }
                  else{
                   ?>
                   <span class="badge bg-danger rounded-3 fw-semibold">Closed</span>
                   <?php
                  } 
                   ?>
                </div>
              </div>
            </div>
          </div>
        
        <?php
      }
      echo '</div>';
        }
         else{
          $row=mysqli_fetch_array($check);
          $_SESSION['apid']=$row['ap_id'];
        ?>
        <!--  Row 2 -->
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Current Application of internaships</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle datatable-1 table table-bordered table-striped" id="data">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Sn</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Co name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Address</h6>
                        </th>
                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Contacts</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Decision</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $i=1;
                      foreach (proj::applied_intern($_SESSION['userid']) as $value) {
                        $app=$value['app_status'];
                      ?>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $i;?></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?php echo $value['c_name'];?></h6>
                            <span class="fw-normal"><a href="<?php echo $value['comptence'];?>" title="View Competence" target="_blank">Competences</a></span>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"> <?php echo $value['c_district'];?>-<?php echo $value['c_sector'];?></p>
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
        <?php
        } 
        ?>
      <?php include 'footer.php';
      ?>
     