<!doctype html>
<html lang="en">
<?php 
session_start();
if (!isset($_SESSION['userid'])) {
  header('location:admin_login');
}
else{
  include 'conn.php';
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Internify</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
    <link rel="stylesheet" href="table/css/dataTables.bootstrap4.min.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-12 col-lg-12 col-xxl-1">
            <div class="card mb-0">
              <div class="card-body">
                <a href="register_school"><button class="btn btn-success">Add school</button></a>
                 <a href="index"><button class="btn btn-danger">Back</button></a>
                <a href="home"><button class="btn btn-secondary">Refresh</button></a><br> <br>
                <?php if (isset($_GET['action'])) {
                  $data=proj::select_school($_GET['action']);
                  $row=mysqli_fetch_array($data);
                  ?>
                <div style="width:50%">
                  <form method="POST" action="server_login">
                    <label>Choose Task</label>
                  <select name="action_approve_school" class="form-control" onchange="this.form.submit()">
                    <option selected disabled>Select--</option>
                    <option value="Approved">Approve</option>
                    <option value="Rejected">Reject</option>
                  </select>
                  <input type="hidden" name="sc_id" value="<?php echo $row['sc_id'];?>">
                    <input type="hidden" name="email" value="<?php echo $row['sc_email'];?>">
                    <input type="hidden" name="phone_number" value="<?php echo $row['sc_contact'];?>">
                    <input type="hidden" name="sc_name" value="<?php echo $row['sc_name'];?>">
                    <input type="hidden" name="head" value="<?php echo $row['sc_head'];?>">
                     <input type="hidden" name="head2" value="<?php echo $row['head2'];?>">
                </form></div><br><br>
                <?php 
              }
                ?>
                <div class="table table-responsive">
              <table class="table text-nowrap mb-0 align-middle datatable-1 table table-bordered table-striped" id="data">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Sn</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">School names</h6>
                        </th> 
                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Contact Person</h6>
                        </th>
                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Contacts</h6>
                        </th>
                         <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Address</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Decision</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $i=1;
                      foreach (proj::select_school() as $value) {
                        $app=$value['sc_status'];
                      ?>
                      <tr>
                        <td class="border-bottom-0"><?php echo $i;?></td>
                        <td class="border-bottom-0">
                           <?php echo $value['sc_name'];?>
                             <td class="border-bottom-0">
                            <p class="fw-semibold mb-1"><a href="home?delete=<?php echo $value['sc_id'];?>" title="Delete this School"><?php echo $value['sc_head'];?></a></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $value['sc_contact'];?></p>
                        </td>

                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $value['sc_district'];?> <?php echo $value['sc_sector'];?></p>
                       
                        
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <?php if ($app!='pending...') {
                              ?>
                               <span class="badge bg-success rounded-3 fw-semibold">Approved</span>
                               <?php
                            }
                            else{
                              ?><span class="badge bg-danger rounded-3 fw-semibold"><?php echo $app;?></span>
                              <a href="home.php?action=<?php echo $value['sc_id'];?>"><button class="btn btn-success">Monitor</button></a>
                              <?php
                            }
                            ?>
                          </div>
                        </td>
                      
                      </tr>
                      <?php
                      $i++;
                      } 

                      if (isset($_GET['delete'])) {
                        $select=$conn->query("SELECT * FROM users where sc_id={$_GET['delete']}");
                        if (!mysqli_num_rows($select)) {
                         $dele=$conn->query("DELETE FROM schools where sc_id={$_GET['delete']}");
                         if ($dele) {
                           ?>
                           <script>
                             window.alert("Deleted")
                             window.location.href='home'
                           </script>
                           <?php
                         }
                         else{
                          echo $conn->error;
                         }
                        }
                        else{
                          ?>
                          <script>
                            window.alert("This School Already in use")
                            window.history.back()
                          </script>
                          <?php
                        }
                      }
                      ?>               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="table/js/jquery.dataTables.min.js"></script>
    <script src="table/js/dataTables.bootstrap4.min.js"></script>
    <script src="table/js/script.js"></script>
</body>

</html>