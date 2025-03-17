<?php  include 'header.php';
//decision Apply

if (isset($_POST['app_status'])) {
    $status=$_POST['app_status'];
    $appid=$_POST['ap_id'];
    $email=$_POST['email'];
    $name=$_POST['name'];
    $nphone=$_POST['phone_number'];
    $update=$conn->query("UPDATE `applied_internaship` SET `app_status`='$status' WHERE `ap_id`='$appid'");
    if ($update) {
    $output='<p>Dear '.$name.',</p>';
    $output.='<p>You Application of internship at '. $_SESSION['c_name'].'</p>';
    $output.='<p>-------------------------------------------------------------</p>';     
    $output.='<p>Has been,</p>'.$status;
    $output.='<p>Internify Adminstration</p>';
    $body = $output;
    $message="Dear ".$name."Your Application of internship has been".$status."Thank You";
        proj::notify_email($email,'Application internship',$body,$_SESSION['c_name']);
        proj::sms($nphone,$message,'LMBTECH_LTD');
        ?>
        <script>
            window.alert("Success")
            window.location.href='index'
        </script>
        <?php
    }
    else{
        echo $conn->error;
    }
}

//company students self assessment


if (isset($_POST['Evaluation_form'])) {
    $stu_id=$_POST['stu_id'];
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
        $target = "../template/" .rand()."Evaluation_form".date('d-m-Y')." ".$_FILES["file-input"]["name"];
        $location=$target;
        $date=date('d-m-Y');
        $type="Evaluation_form";
        $location=mysqli_real_escape_string($conn,$location);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
          $ins=$conn->query("INSERT INTO `company_reports`(`r_id`, `stu_id`, `file_name`, `date_time`, `c_id`, `c_type`, `week`) VALUES (NULL,'$stu_id','$location','$date','".$_SESSION['userid']."','$type','$week')");
            if ($ins) {
              ?>
              <script>
                window.alert("Well done inserted")
                window.location.href='evaluation_form'
              </script>
              <?php
            }
 }
}
}
// attendance

// end of attendace
if (isset($_POST['attendance'])) {
    $stu_id=$_POST['stu_id'];
    $week=$_POST['week'];
    $time_in=$_POST['time_in'];
    $time_out=$_POST['time_out'];
    $date=date('d-m-Y');
    $day=date('D');
    $task=$_POST['task'];
    $c_id=$_SESSION['userid'];

    $s=$conn->query("SELECT * FROM attendance where stu_id='$stu_id' and week='$week' and date_time='$date'");
    echo $conn->error;
    if (mysqli_num_rows($s)) {
      ?>
      <script>
          window.alert("Please attandace exists")
          window.history.back()
      </script>
      <?php
    }
    else{
    $insert=$conn->query("INSERT INTO `attendance`(`att_id`, `stu_id`, `time_in`, `time_out`, `date_time`, `day_s`, `c_id`,desci,week) VALUES (NULL,'$stu_id','$time_in','$time_out','$date','$day','$c_id','$task','$week')");

    if ($insert) {
        ?>
        <script>
            window.alert("Well created")
            window.location.href='attendance'
        </script>
        <?php
    }
    else{
        echo $conn->error;
    }
}
}

if (isset($_POST['change_password'])) {
  $old=$_POST['old_pass'];
  $userid=$_SESSION['userid'];
  $newpassword=mysqli_real_escape_string($conn,$_POST['n_pass']);
  $comfrimpassword=mysqli_real_escape_string($conn,$_POST['c_pass']);

  if ($newpassword !=$comfrimpassword) {
    ?>
    <script>
      window.alert("Please Password is not match")
      window.history.back()
    </script>
    <?php
  }
  else{
    $oldn=md5($old);
    $get=$conn->query("SELECT * FROM users where password='$oldn' and userid='$userid'");
    if (!mysqli_num_rows($get)) {
      ?>
      <script>
        window.alert("Please Old Password incorrect")
        window.history.back()
      </script>
      <?php
    }
    else{
      $np=md5($newpassword);
      $update=$conn->query("UPDATE `company` SET `password`='$np' WHERE `c_id`='$userid'");
      if ($update) {
       ?>
       <script>
         window.alert("Success! Password has  been Changed")
         window.location.href='index'
       </script>
       <?php
      }
      else{
        echo $conn->error;
      }
    }

  }
}
//end change Password



// change
if (isset($_POST['submited_report'])) {
  if (!empty($_POST['faculity']) && !empty($_POST['week']) && !empty($_POST['type'])) {
   $_SESSION['claid']=$_POST['faculity'];
   $_SESSION['week']=$_POST['week'];
   $_SESSION['type']=$_POST['type'];
   if (!empty($_SESSION['claid']) && !empty($_SESSION['week']) && !empty($_SESSION['type'])) {
       ?>
       <script>
           window.location.href='submited'
       </script>
       <?php
   }
   else{
    echo "oooops";
   }
 }
   else{
    ?>
    <script>
      window.alert("Please Check Your inputs")
      window.history.back()
    </script>
    <?php
   }
}

// end of this

if (isset($_POST['Approve_report'])) {
    if (!empty($_POST['task'])) {
       $id=$_POST['id'];
       $task=$_POST['task'];

       $update=$conn->query("UPDATE reports SET feed_back='$task'  where re_id='$id'");

       if ($update) {
           ?>
           <script>
               window.alert("<?php echo $task;?> Success")
               window.location.href='submited'
           </script>
           <?php
       }
       else{
        echo $conn->error;
       }
    }
    
}


// change
 ?>