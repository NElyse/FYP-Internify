<?php  include 'header.php';

// Apply internaship
if (isset($_POST['apply_intern'])) {
 $av_id=$_POST['av_id'];
 $place=$_POST['place'];
 $rem=$place-1;
 $st_id=$_POST['stu_id'];
 $date=date("d-M-Y");
 $ver=$conn->query("SELECT * from applied_internaship where stu_id='$st_id' and av_id='$av_id'");
 if (mysqli_num_rows($ver)) {
  ?>
  <script>
    window.alert("Sorry! Wait for Admin to Approve your Application you applied before")
    window.history.back()
  </script>
  <?php
 }
 else{
  $ins=$conn->query("INSERT INTO `applied_internaship`(`ap_id`, `av_id`, `stu_id`, `app_status`, `date_app`) VALUES (NULL,'$av_id','$st_id','pending','$date')");
  if ($ins) {
    $up=$conn->query("UPDATE `av_internaship` SET `places`='$rem' WHERE `av_id`='$av_id'");
  ?>
  <script>
    window.alert("Thank you to sumbit Your Application,Admin will let your Feedback to yor email or SMS");
    window.location.href='index'
  </script>
  <?php
  }
  else{
    echo $conn->error;
  }
 }
}

//adding Api Agremment feport
if (isset($_POST['aip_aggrement'])) {
$fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
    $allowed_image_extension = array(
        "pdf"
    );

    // Get image file extension
    $file_extension =strtolower(pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION));
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        echo'<script>
        window.alert("Please Choose an file")
        window.history.back()';
    }    // Validate file input to check if is with valid extension
    else if (!in_array($file_extension, $allowed_image_extension)) {
        echo'<script>
        window.alert("Please! Only PDF files is allowed")
        window.history.back()';
    }    // Validate image file size
    else if (($_FILES["file-input"]["size"] > 5000000)) {
       echo'
       <script>
        window.alert("Please Your file size exceeds 5MB! Try Again")
        window.history.back()';
    }    // Validate image file dimension
     else {
        $target = "../template/" .rand()."IAP Agreement".date('d-m-Y')." ".$_FILES["file-input"]["name"];
        $location=$target;
        $date=date('d-m-Y');
        $type="IAP Agreement";
        $location=mysqli_real_escape_string($conn,$location);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
          $ins=$conn->query("INSERT INTO `reports`(`re_id`, `stu_id`, `file_name`, `type`, `date_time`) VALUES (NULL,'".$_SESSION['userid']."','$location','$type','$date')");

            if ($ins) {
              ?>
              <script>
                window.alert("Well done inserted")
                window.location.href='agreement'
              </script>
              <?php
            }
 }
}
}
//end aip aggrement

// weekly Assessment
if (isset($_POST['weeklyreport'])) {
    if (!empty($_POST['week'])) {
    $week=$_POST['week'];
$fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
    $allowed_image_extension = array(
        "pdf"
    );

    // Get image file extension
    $file_extension =strtolower(pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION));
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        echo'<script>
        window.alert("Please Choose an file")
        window.history.back()';
    }    // Validate file input to check if is with valid extension
    else if (!in_array($file_extension, $allowed_image_extension)) {
        echo'<script>
        window.alert("Please! Only PDF files is allowed")
        window.history.back()';
    }    // Validate image file size
    else if (($_FILES["file-input"]["size"] > 5000000)) {
       echo'
       <script>
        window.alert("Please Your file size exceeds 5MB! Try Again")
        window.history.back()';
    }    // Validate image file dimension
     else {
        $target = "../template/" .rand()."weeklyreport".date('d-m-Y')." ".$_FILES["file-input"]["name"];
        $location=$target;
        $date=date('d-m-Y');
        $type="weeklyreport";
        $location=mysqli_real_escape_string($conn,$location);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
          $ins=$conn->query("INSERT INTO `reports`(`re_id`, `stu_id`, `file_name`,week,`type`, `date_time`,feed_back) VALUES (NULL,'".$_SESSION['userid']."','$location','$week','$type','$date','pending')");

            if ($ins) {
              ?>
              <script>
                window.alert("Well done inserted")
                window.location.href='weeklyreport'
              </script>
              <?php
            }
 }
}
}
else{
    echo "Please Choose week";
}
}
// end of weekly Assessment

// self_Assessment
if (isset($_POST['self_Assessment'])) {
    if (!empty($_POST['week'])) {
    $week=$_POST['week'];
$fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
    $allowed_image_extension = array(
        "pdf"
    );

    // Get image file extension
    $file_extension =strtolower(pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION));
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        echo'<script>
        window.alert("Please Choose an file")
        window.history.back()';
    }    // Validate file input to check if is with valid extension
    else if (!in_array($file_extension, $allowed_image_extension)) {
        echo'<script>
        window.alert("Please! Only PDF files is allowed")
        window.history.back()';
    }    // Validate image file size
    else if (($_FILES["file-input"]["size"] > 5000000)) {
       echo'
       <script>
        window.alert("Please Your file size exceeds 5MB! Try Again")
        window.history.back()';
    }    // Validate image file dimension
     else {
        $target = "../template/" .rand()."self_Assessment".date('d-m-Y')." ".$_FILES["file-input"]["name"];
        $location=$target;
        $date=date('d-m-Y');
        $type="self_Assessment";
        $location=mysqli_real_escape_string($conn,$location);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
          $ins=$conn->query("INSERT INTO `reports`(`re_id`, `stu_id`, `file_name`, `type`, `date_time`,week,feed_back) VALUES (NULL,'".$_SESSION['userid']."','$location','$type','$date','$week','pending')");

            if ($ins) {
              ?>
              <script>
                window.alert("Well done inserted")
                window.location.href='students_self_assement'
              </script>
              <?php
            }
 }
}
}
else{
?>
<script>
    window.alert("Please choose a Week")
    window.history.back()
</script>
<?php
}
}
// end self_Assessment





 ?>