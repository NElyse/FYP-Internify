<?php
include 'conn.php';
session_start();
if (isset($_POST['school_login'])) {
 if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  $sel=$conn->query("SELECT * FROM users,schools where schools.sc_id=users.sc_id and users.password='$password' and users.email='$email' and users.user_status='Active'");

  if (!mysqli_num_rows($sel)) {
    ?>
    <script>
      window.alert("Invalid login! check your details")
      window.history.back()
    </script>
    <?php
  }
  else{
    $row=mysqli_fetch_array($sel);
    $_SESSION['userid']=$row['userid'];
    $_SESSION['lname']=$row['fname'];
    $_SESSION['sc_id']=$row['sc_id'];
    $_SESSION['sc_name']=$row['sc_name'];
    $_SESSION['sc_abbr']=$row['sc_abbr'];
    $_SESSION['last_request']=time();

    $sele=$conn->query("SELECT * FROM year where sc_id={$_SESSION['sc_id']} and year_status='Active'");
    if (mysqli_num_rows($sele)) {
      $year=mysqli_fetch_array($sele);
      $_SESSION['year_name']=$year['year_name'];
      $_SESSION['yid']=$year['year_id'];
    }
    else{
     $_SESSION['yid']=0;
    }
    ?>
    <script>
      window.alert("Welcome <?php echo $_SESSION['lname'];?>")
      window.location.href='dash/'
    </script>
    <?php
  }
 }
 else{
  ?>
  <script>
    window.alert("Please enter in all data")
    window.history.back()
  </script>
  <?php
 }
}


// regist school
if (isset($_POST['register_school'])) {
  if (!empty($_POST['sc_name']) && !empty($_POST['sc_abbr']) && !empty($_POST['sc_email']) && !empty($_POST['person']) && !empty($_POST['sc_contact']) && !empty($_POST['sector'])) {

    $sc_name=mysqli_real_escape_string($conn,$_POST['sc_name']);
    $sc_abbr=mysqli_real_escape_string($conn,$_POST['sc_abbr']);
    $sc_email=mysqli_real_escape_string($conn,$_POST['sc_email']);
    $person=mysqli_real_escape_string($conn,$_POST['person']);
    $contact=$_POST['sc_contact'];
    $district=$_POST['district'];
    $province=$_POST['province'];
    $sector=$_POST['sector'];
    $fp=$_POST['fp'];

    $check=$conn->query("SELECT * FROM schools where  sc_name='$sc_name' OR   sc_email='$sc_email'");

    if (mysqli_num_rows($check)) {
   ?>
   <script>
     window.alert("Sorry! Please This School exist Try again")
     window.history.back()
   </script>
   <?php
    }
    else{
      if (ctype_alnum($contact) && strlen($contact)==10) {
       $nphone="+25".$contact;

    $fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
    $allowed_image_extension = array(
        "png","jpg","jpeg"
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
        window.alert("Please! Only JPG, JPEG & PNG files are allowed")
        window.history.back()';
    }    // Validate image file size
    else if (($_FILES["file-input"]["size"] > 5000000)) {
       echo'
       <script>
        window.alert("Please Your file size exceeds 5MB! Try Again")
        window.history.back()';
    }    // Validate image file dimension
     else {
        $target = "images/" .rand()." ".$sc_name." ".date('d-m-Y')." ".$_FILES["file-input"]["name"];
        $location="../".$target;
        $date=date('d-m-Y H:i');
        $location=mysqli_real_escape_string($conn,$location);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
          $in=$conn->query("INSERT INTO `schools`(`sc_name`, `sc_abbr`, `sc_sector`, `sc_district`, `sc_email`, `sc_logo`, `sc_status`, `sc_contact`, `sc_head`,head2) VALUES ('$sc_name','$sc_abbr','$sector',' $district','$sc_email','$location','pending...','$nphone','$person','$fp')");
      }
      if ($in) {
          $output='<p>Dear '.$person.',</p>';
          $output.='<p>Thank you to regist your school '.$sc_name.' to Internify</p>';
    $output.='<p>-------------------------------------------------------------</p>';     
    $output.='<p>Wait for Admin aproval your School,</p>';
    $output.='<p>Internify Adminstration</p>';
    $body = $output;
        proj::notify_email($sc_email,'Success registration',$body,'Internify')
        ?>
        <script>
          window.alert("Success! data registered")
          window.location.href="home"
        </script>
        <?php
      }
      else{
        echo $conn->error;
      }
    }
  }
      else{
        ?>
        <script>
          window.alert("Please phone number must be number and not less to 10 digits");
          window.history.back()
        </script>
        <?php
      }
    }
    }
  else{
    ?>
    <script>
      window.alert("Please All inputs must be requires")
    </script>
    <?php
  }
}
// end of school registration


// students login
if (isset($_POST['student_login'])) {
 if (!empty($_POST['email'])) {
   $reg=mysqli_real_escape_string($conn,$_POST['email']);
   $sele=$conn->query("SELECT * FROM students,students_info,year,trade,levels WHERE students.stid=students_info.stid and trade.trade_id=students_info.trade_id and year.year_id=students_info.year_id and levels.lev_id=students_info.lev_id and students.reg_number='$reg'");
   if (mysqli_num_rows($sele)) {
    $row=mysqli_fetch_array($sele);
    $_SESSION['userid']=$row['stu_id'];
    $_SESSION['level']=$row['lev_id'];
    $_SESSION['trade']=$row['trade_id'];
    $_SESSION['sc_id']=$row['sc_id'];
    $_SESSION['username']=$row['st_fname'];
    $_SESSION['yid']=$row['year_id'];
    ?>
    <script>
      window.alert("Success, Welcome <?php echo $_SESSION['username'];?>")
      window.location.href='student/'
    </script>
    <?php
   }
   else{
    ?>
    <script>
      window.alert("Student info not founder")
      window.history.back()
    </script>
    <?php
   }

 }
}
// student's logins

if (isset($_POST['company_login'])) {
if (!empty($_POST['email']) && !empty($_POST['password'])) {
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,md5($_POST['password']));

$select=$conn->query("SELECT * FROM `company` where c_email='$email' and password='$password'");
if (mysqli_num_rows($select)) {
  $row=mysqli_fetch_array($select);
  $_SESSION['userid']=$row['c_id'];
  $_SESSION['c_name']=$row['c_name'];
   $_SESSION['sc_id']=$row['sc_id'];
  ?>
  <script>
    window.alert("Success! Login")
    window.location.href='company/'
  </script>
  <?php
}
else{
  ?>
  <script>
    window.alert("Invalid logins")
    window.history.back()
  </script>
  <?php
}
}
else{
  ?>
  <script>
    window.alert("Please enter in All data")
    window.history.back()
  </script>
  <?php
}

}

//admin login

if (isset($_POST['admin_login'])) {
 $username=mysqli_real_escape_string($conn,$_POST['username']);
 $password=mysqli_real_escape_string($conn,$_POST['password']);
 $select=$conn->query("SELECT * FROM admin where username='$username' and password='$password'");
 if (mysqli_num_rows($select)) {
  $row=mysqli_fetch_array($select);
  $_SESSION['userid']=$row['ad_id'];
  $_SESSION['name']=$row['username'];
  ?>
  <script>
    window.alert("Success login")
    window.location.href='home'
  </script>
  <?php
 }
 else{
  ?>
   <script>
    window.alert("Invalid login")
    window.history.back()
  </script>
  <?php
 }
}
// end of login company

// approve school
if (isset($_POST['action_approve_school'])) {
  $status=$_POST['action_approve_school'];
  $sc_id=$_POST['sc_id'];
  $email=$_POST['email'];
  $gen=substr(uniqid(), 0,6);
  $phone_number=$_POST['phone_number'];
  $sc_name=$_POST['sc_name'];
  $head=$_POST['head'];
  $head2=$_POST['head2'];
  $password=md5($gen);
  $sele=$conn->query("SELECT * FROM schools where sc_id='$sc_id' and sc_status='$status'");
  if (!mysqli_num_rows($sele)) {
   $update=$conn->query("UPDATE `schools` SET `sc_status`='$status' WHERE `sc_id`='$sc_id'");

   if ($update) {
    $insert=$conn->query("INSERT INTO `users`(`userid`, `fname`, `lname`, `sc_id`, `email`, `password`, `user_status`) VALUES (NULL,'$head','$head2','$sc_id','$email','$password','Active')");
  }
    if ($insert) {
     $output='<p>Dear '.$sc_name.',</p>';
          $output.='<p>You have registered to Internify Please use  here is your Email and and password for Login to your Account</p>';
        $output.='<p>-------------------------------------------------------------</p>';
      $output.='<p>Email: '.$email.'</p><br>';
      $output.='<p>password: '.$gen.'</p><br>'; 
       $output.='<p>-------------------------------------------------------------</p>';
       $output.='<b>'.$_SERVER['HTTP_USER_AGENT'].'<b> <br>';     
      $output.='<p>Thank You.</p>';
      $output.='<p>Internify Adminstration</p>';
      $body = $output;
        proj::notify_email($email,'Registration',$body,$_SESSION['sc_name']);
        ?>
   <script>
     window.alert("Well <?php echo $status;?>");
     window.history.back()
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
      windowa.alert("Please no task Applied at ance on the same school")
      window.history.back()
    </script>
    <?php
  }
}
// end of Approve school
?>