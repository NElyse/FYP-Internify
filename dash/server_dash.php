<?php  include 'header.php';
if (isset($_POST['academic_year'])) {
$year=$_POST['academic_year_name'];

$sele=$conn->query("SELECT * FROM year where year_name='$year' and sc_id={$_SESSION['sc_id']}");
if (mysqli_num_rows($sele)) {
  ?>
  <script>
    window.alert("Please <?php echo $year;?> already exist or Disactivate current activated")
    window.history.back()
  </script>
  <?php
}
else{
  $sc_id=$_SESSION['sc_id'];
  $insert_accademics=$conn->query("INSERT INTO `year`(`year_name`, `sc_id`, `year_status`) VALUES ('$year','$sc_id','Disactive')");

  if ($insert_accademics) {
    ?>
    <script>
      window.alert("Success! Recorded")
      window.location.href='academics'
    </script>
    <?php
  }
  else{
    echo $conn->error;
  }

}
}

//end of academics registrations

// monitor academic year
if (isset($_POST['choose_actions'])) {
  $action=$_POST['choose_actions'];
  $id=$_POST['year_id'];
  if ($action=='Active') {
  $sel=$conn->query("SELECT * FROM year where year_status='$action' and sc_id={$_SESSION['sc_id']}");
  if (mysqli_num_rows($sel)) {
  ?><script>
    window.alert("Please you must activate only one academics year")
    window.history.back()
  </script>
  <?php
  }
  else{
    $update=$conn->query("UPDATE year SET year_status='$action' where year_id='$id'");
    if ($update) {
      $select=$conn->query("SELECT * from year where year_id={$id}");
      $row=mysqli_fetch_array($select);
      $_SESSION['yid']=$row['year_id'];
 ?>
 <script>
   window.alert('Well done')
   window.location.href='academics'
 </script>
 <?php
}
else{
  echo $conn->error;
  }
  }
  }
else{
  $action=$_POST['choose_actions'];
  $update=$conn->query("UPDATE year SET year_status='$action' where year_id='$id'");
}
if ($update) {
 ?>
 <script>
   window.alert('Well done')
   window.location.href='academics'
 </script>
 <?php
}
else{
  echo $conn->error;
  }
}
// end monitor of academics year
if (isset($_POST['add_faculity'])) {
 if (!empty($_POST['sector']) && !empty($_POST['faculity'])) {
  $sector=mysqli_real_escape_string($conn,$_POST['sector']);
  $faculity=mysqli_real_escape_string($conn,$_POST['faculity']);
  $chesel=$conn->query("SELECT * FROM trade where trade_name='$faculity' and sector='$sector' and sc_id={$_SESSION['sc_id']}");
  $sc_id=$_SESSION['sc_id'];
  if (mysqli_num_rows($chesel)) {
    ?>
    <script>
      window.alert("Please this Faculity is already")
      window.history.back()
    </script>
    <?php
  }
  else{
    $insert=$conn->query("INSERT INTO `trade`(`trade_name`, `sector`, `sc_id`) VALUES ('$faculity','$sector','$sc_id')");
    if ($insert) {
      ?><script>
        window.alert("Success")
        window.location.href='faculities'
      </script>
      <?php
    }
    else{
      echo $conn->error;
    }
  }
  
 }
}

// editing faculity
if (isset($_POST['edit_faculity'])) {
 if (!empty($_POST['sector']) && !empty($_POST['faculity'])) {
  $sector=mysqli_real_escape_string($conn,$_POST['sector']);
  $id=$_POST['id'];
  $faculity=mysqli_real_escape_string($conn,$_POST['faculity']);
  $chesel=$conn->query("SELECT * FROM trade where trade_name='$faculity' and sector='$sector' and sc_id={$_SESSION['sc_id']}");
  $sc_id=$_SESSION['sc_id'];
  if (mysqli_num_rows($chesel)) {
    ?>
    <script>
      window.alert("Please this Faculity is already")
      window.history.back()
    </script>
    <?php
  }
  else{
    $insert=$conn->query("UPDATE `trade` SET `trade_name`='$faculity',`sector`='$sector'  WHERE  `trade_id`='$id'");
    if ($insert) {
      ?><script>
        window.alert("Success updated")
        window.location.href='faculities'
      </script>
      <?php
    }
    else{
      echo $conn->error;
    }
  }
  
 }
}

// end of faculity
if (isset($_POST['add_level'])) {
 if (!empty($_POST['faculity']) && !empty($_POST['promotion'])) {
   $promotion=mysqli_real_escape_string($conn,$_POST['promotion']);
   $faculity=$_POST['faculity'];
   $year=$_SESSION['yid'];
   $sc_id=$_SESSION['sc_id'];

   $selevel=$conn->query("SELECT * FROM levels where year_id={$_SESSION['yid']} and   lev_name='$promotion' and trade_id='$faculity'");
   if (mysqli_num_rows($selevel)) {
    ?>
    <script>
      window.alert("Please this Faculity is already exist")
      window.history.back()
    </script>
    <?php
   }
   else{
    $inser=$conn->query("INSERT INTO `levels`(`year_id`, `sc_id`, `lev_name`, `trade_id`) VALUES ('$year','$sc_id','$promotion','$faculity')");
    if ($inser) {
      ?>
      <script>
        window.alert("Success!")
        window.location.href='levels'
      </script>
      <?php
    }
    else{
      echo $conn->error;
    }
   }
 }
}

// adding students

if (isset($_POST['add_students'])) {
  if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['parent_name']) && !empty($_POST['parent_phone'])) {
    $sc_id=$_SESSION['sc_id'];
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $phone=$_POST['parent_phone'];
    $parent=mysqli_real_escape_string($conn,$_POST['parent_name']);
    $reg=strtolower($_POST['reg_number']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
if (ctype_alnum($phone) && strlen($phone)==10) {
    $sele=$conn->query("SELECT * FROM `students` WHERE reg_number='$reg' OR email='$email' and sc_id='".$_SESSION['sc_id']."'");
    if (mysqli_num_rows($sele)) {
      ?>
      <script>
        window.alert("Fail, this Students already exist")
        window.history.back()
      </script>
      <?php
    }
    else{
      $nphone="+25".$phone;
      $insert=$conn->query("INSERT INTO `students`(`stid`, `st_fname`, `st_lname`, `parent`, `reg_number`, `email`, `phone_number`, `sc_id`) VALUES (NULL,'$fname','$lname','$parent','$reg','$email','$nphone','$sc_id')");
      if ($insert) {
       ?>
       <script>
         window.alert("Success well Registered")
         window.location.href='students_info'
       </script>
       <?php
      }
    }
  }
  else{
    ?>
    <script>
      window.alert("Please phone number must be number and 10 digits")
      window.history.back()
    </script>
    <?php
  }
}
  else {
  ?>
  <script>
    window.alert("Please fill out All fields")
    window.history.back()
  </script>
  <?php
  }
  
}
// end of students registration
if (isset($_POST['edit_students'])) {
  if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['parent_name']) && !empty($_POST['parent_phone'])) {
    $sc_id=$_SESSION['sc_id'];
    $id=$_POST['id'];
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $phone=$_POST['parent_phone'];
    $parent=mysqli_real_escape_string($conn,$_POST['parent_name']);
    $reg=$_POST['reg_number'];
    $email=mysqli_real_escape_string($conn,$_POST['email']);
if (ctype_alnum($phone) && strlen($phone)==10) {
    $sele=$conn->query("SELECT * FROM `students` WHERE reg_number='$reg' and email='$email' and sc_id='".$_SESSION['sc_id']."'");
    if (mysqli_num_rows($sele)) {
      ?>
      <script>
        window.alert("Fail, this Students already exist")
        window.history.back()
      </script>
      <?php
    }
    else{
      $nphone="+25".$phone;
      $insert=$conn->query("UPDATE `students` SET `st_fname`='$fname',`st_lname`='$lname',`parent`='$parent',`reg_number`='$reg',`email`='$email',`phone_number`='$nphone',`sc_id`='$sc_id' WHERE `stid`='$id'");
      if ($insert) {
       ?>
       <script>
         window.alert("Success well Updates")
         window.location.href='students_info'
       </script>
       <?php
      }
    }
  }
  else{
    ?>
    <script>
      window.alert("Please phone number must be number and 10 digits")
      window.history.back()
    </script>
    <?php
  }
}
  else {
  ?>
  <script>
    window.alert("Please fill out All fields")
    window.history.back()
  </script>
  <?php
  }
  
}
// end of students registration

// promoting
if (isset($_POST['promote_student'])) {
 if (!empty($_POST['faculity']) && !empty($_POST['level'])) {
  $faculity=$_POST['faculity'];
  $level=$_POST['level'];
  $stid=$_POST['id'];
  $yid=$_SESSION['yid'];
  $sc_id=$_SESSION['sc_id'];

  $check=$conn->query("SELECT * FROM students_info where year_id='$yid' and sc_id='$sc_id' and stid='$stid'");
  if (mysqli_num_rows($check)) {
   ?>
   <script>
     window.alert("Sorry! Please this student is Already Pormoted in this academic Year");
     window.history.back()
   </script>
   <?php
  }
  else{
    $insert=$conn->query("INSERT INTO `students_info`(`stu_id`, `stid`, `trade_id`, `lev_id`,`year_id`,`sc_id`) VALUES (NULL,'$stid','$faculity','$level','$yid','$sc_id')");
    if ($insert) {
      ?>
      <script>
        window.alert("Success! Promoted")
        window.location.href='students_info'
      </script>
      <?php
    }
  }

 }
}
//end of promotion



// adding company
if (isset($_POST['add_company'])) {
  if (!empty($_POST['c_name']) && !empty($_POST['super_name']) && !empty($_POST['c_contact'])) {
    $c_name=mysqli_real_escape_string($conn,$_POST['c_name']);
    $spv=mysqli_real_escape_string($conn,$_POST['super_name']);
    $phone=$_POST['c_contact'];
    $email=$_POST['email'];
    $province=$_POST['province'];
    $district=$_POST['district'];
    $sector=$_POST['sector'];
    if (ctype_alnum($phone) && strlen($phone)==10) {
    $se=$conn->query("SELECT * FROM company where c_name='$c_name' and sc_id='".$_SESSION['sc_id']."'");

    if (mysqli_num_rows($se)) {
      ?>
      <script>
        window.alert("Please this company already Registered")
        window.history.back()
      </script>
      <?php
    }
    else{
      $nphone="+25".$phone;
      $sc_id=$_SESSION['sc_id'];
      $gen=substr(uniqid(),0,6);
      $password=md5($gen);
      $ins=$conn->query("INSERT INTO `company`(`c_id`, `c_name`, `c_contact`, `c_email`, `c_province`, `c_district`, `c_sector`, `sc_id`, `super_name`, `password`) VALUES (NULL,'$c_name','$nphone','$email','$province',' $district','$sector','$sc_id','$spv','$password')");
      if ($ins) {
        $output='<p>Dear '.$c_name.',</p>';
          $output.='<p>You have registered to Internify by '.$_SESSION['sc_name'].' Please use  here is your Email and and password for Login to your Account</p>';
        $output.='<p>-------------------------------------------------------------</p>';
      $output.='<p>Email: '.$email.'</p><br>';
      $output.='<p>password: '.$gen.'</p><br>'; 
       $output.='<p>-------------------------------------------------------------</p>';
       $output.=''.$_SERVER['HTTP_USER_AGENT'].'<br>';     
      $output.='<p>Thank You.</p>';
      $output.='<p>Internify Adminstration</p>';
      $body = $output;
        proj::notify_email($email,'Registration',$body,$_SESSION['sc_name']);
        ?>
        <script>
          window.alert("Success! well insert Registered")
          window.location.href='companies'
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
      window.alert("Please phone number must be digits and equal to 10 digits")
      window.history.back()
    </script>
    <?php
  }
}

  // code...
}

// adding internaship to company
if (isset($_POST['add_internaship'])) {
  if (!empty($_POST['number']) && !empty($_POST['level']) && !empty($_POST['c_id'])) {
   $c_id=$_POST['c_id'];
   $number=$_POST['number'];
   $start_date=date("d-M-Y",strtotime($_POST['start_date']));
   $end_date=date("d-M-Y",strtotime($_POST['end_date']));
   $level=$_POST['level'];
   $sc_id=$_SESSION['sc_id'];
   if (ctype_alnum($number)) {
    $sele=$conn->query("SELECT * FROM av_internaship where trade_id='$level' and sc_id='$sc_id' and c_id='$c_id' and start_date='$start_date' and end_date='$end_date'");
    if (mysqli_num_rows($sele)) {
      ?><script>
        window.alert("Please this Intership created! Try Again")
        window.history.back()
      </script>
      <?php
    }
    else{
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
        $target = "../images/" .rand()." ".date('d-m-Y')." ".$_FILES["file-input"]["name"];
        $location=$target;
        $date=date('d-m-Y H:i');
        $location=mysqli_real_escape_string($conn,$location);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
      $ins=$conn->query("INSERT INTO `av_internaship`(`av_id`, `c_id`, `sc_id`, `trade_id`,`places`,comptence,start_date,end_date) VALUES (NULL,'$c_id','$sc_id','$level','$number','$location','$start_date','$end_date')");
    }
      if ($ins) {
        ?>
        <script>
          window.alert("Success! well created")
          window.location.href='av_internaships'
        </script>
        <?php
      }
      else{
        echo $conn->error;
      }
    }
   }
 }
   else{
    ?>
    <script>
      window.alert("Please Place must be written in digits format")
      window.history.back()
    </script>
    <?php
   }
  }
  else{
    ?><script>
      window.alert("Please fill out all inputs")
      window.history.back()
    </script>
    <?php
  }
}
//end of internaships

// top ups
if (isset($_POST['top_up'])) {
  if (!empty($_POST['np'])) {
    $oldp=$_POST['current_qty'];
    $np=$_POST['np'];
    $av_id=$_POST['av_id'];
    $rp=NULL;
    $update=NULL;
    if (ctype_alnum($np)) {
      if ($np<=0){
      ?>
      <script>
        window.alert("Please you must to add number not less than 1")
        window.history.back()
      </script>
      <?php
    }
    else{
      $rp=$oldp+$np;

      $update=$conn->query("UPDATE `av_internaship` SET `places`='$rp' WHERE `av_id`='$av_id'");
      if ($update) {
        ?>
        <script>
          window.alert("Success added")
          window.location.href='av_internaships'
        </script>
        <?php
          }
          else{
            echo $conn->error;
          }
        }
        }
     else {
      ?>
      <script>
        window.alert("Please places to add must be number")
        window.history.back()
      </script>
      <?php
    }
  }
  else{
    ?>
    <script>
      window.alert("Please fill out all inputs")
      window.history.back()
    </script>
    <?php
  }
}
// end top ups

// remove internaship
if (isset($_GET['delete'])) {
  $id=$_GET['delete'];
  $selec=$conn->query("SELECT *  FROM `applied_internaship` WHERE av_id='$id'");
  if (!mysqli_num_rows($selec)) {
   $delete=$conn->query("DELETE FROM av_internaship where av_id='$id'");
   if ($delete) {
    ?>
    <script>
      window.alert("Success well deleted");
      window.location.href='av_internaships'
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
      window.alert("Sorry! this Intership was Applied Try agin")
      window.history.back()
    </script>
    <?php
  }
}
// end of remove internaship

// edit level

if (isset($_POST['edit_level_names'])) {
  if (!empty($_POST['lev_name'])) {
  $lev_id=$_POST['lev_id'];
  $trade_id=$_POST['trade_id'];
  $lev_name=$_POST['lev_name'];
  $sel=$conn->query("SELECT * FROM levels where trade_id='$trade_id' and lev_name='$lev_name' and sc_id='".$_SESSION['sc_id']."'");
  if (mysqli_num_rows($sel)) {
    ?>
    <script>
      window.alert("Please this level already exist")
      window.history.back()
    </script>
    <?php
  }
  else{
    $up=$conn->query("UPDATE `levels` SET `lev_name`='$lev_name' WHERE `lev_id`='$lev_id'");
    if ($up) {
     ?>
     <script>
       window.alert("Success Update")
       window.location.href='levels'
     </script>
     <?php
    }
  }
}
else{
  ?>
  <script>
    window.alert("Please fill out all inputs")
    window.history.back()
  </script>
  <?php
}
}
// change Password
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
      $update=$conn->query("UPDATE `users` SET `password`='$np' WHERE `userid`='$userid'");
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
if (isset($_POST['check'])) {
  if (!empty($_POST['faculity']) && !empty($_POST['week']) && !empty($_POST['type'])) {
   $_SESSION['claid']=$_POST['faculity'];
   $_SESSION['week']=$_POST['week'];
   $_SESSION['type']=$_POST['type'];
   if (!empty($_SESSION['claid']) && !empty($_SESSION['week']) && !empty($_SESSION['type'])) {
       ?>
       <script>
           window.location.href='unweekly_reports'
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

// end change

// change
if (isset($_POST['submited_report'])) {
  if (!empty($_POST['faculity']) && !empty($_POST['week']) && !empty($_POST['type'])) {
   $_SESSION['claid']=$_POST['faculity'];
   $_SESSION['week']=$_POST['week'];
   $_SESSION['type']=$_POST['type'];
   if (!empty($_SESSION['claid']) && !empty($_SESSION['week']) && !empty($_SESSION['type'])) {
       ?>
       <script>
           window.location.href='submited_report'
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

// end change

// attandence
if (isset($_POST['submited_attendace'])) {
  if (!empty($_POST['level'])) {
    $_SESSION['lev']=$_POST['level'];
    ?>
    <script>
      window.location.href='attendance'
    </script>
    <?php
  }
  else{
    ?>
    <script>
      window.alert("Please choose level")
    window.history.back()
    </script>
    <?php
  }
}
// end of Attandnce

 ?>