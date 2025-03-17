<?php 
$conn = mysqli_connect("localhost","root","","intern");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if (!class_exists("proj")) {
  class proj
  {
    public static function connect($value='')
    { 
      global $conn;
      //$conn = mysqli_connect("localhost","root","","system");
      if (!$conn) {
        exit("Database connection failed");
      } else{
        return $conn;
      }     
    }
    //end of connect function

    // select academic year
    public static function academic($value=''){
      $conn=self::connect();
      if (!empty($value)) {
       $sele=$conn->query("SELECT * from year where sc_id={$_SESSION['sc_id']} and year_id='$value'");
      }
      else{
        $sele=$conn->query("SELECT * from year where sc_id={$_SESSION['sc_id']}");
      }

      return $sele;

    }
    // end of academic year
public static function faculity($value=''){
  $conn=self::connect();
  $fac_sel=$conn->query("SELECT * FROM `trade` WHERE sc_id='".$_SESSION['sc_id']."'");
  return $fac_sel;
}

public static function levels($value=''){
  $conn=self::connect();
  $check=$conn->query("SELECT * FROM `levels`,year,trade  WHERE year.year_id=levels.year_id and year.year_id={$_SESSION['yid']} and trade.trade_id=levels.trade_id and year.sc_id={$_SESSION['sc_id']}");
  return $check;
}

// students
public static function students($value=''){
$conn=self::connect();
if (!empty($value)) {
  $sele=$conn->query("SELECT * FROM `students` where students.sc_id={$_SESSION['sc_id']} and stid='$value'");
}
else{
   $sele=$conn->query("SELECT * FROM `students` where students.sc_id={$_SESSION['sc_id']} order by stid desc");
}
return $sele;
}

// end of students

// students
public static function promoted($value=''){
$conn=self::connect();
if (!empty($value)) {
  $sele=$conn->query("SELECT * FROM `students`,students_info,trade,levels where trade.trade_id=students_info.trade_id and students_info.stid=students.stid and students.sc_id={$_SESSION['sc_id']} and levels.lev_id=students_info.lev_id and students_info.year_id={$value} order by students.st_fname ASC");
}
else{
   $sele=$conn->query("SELECT * FROM `students`,students_info,trade,levels where trade.trade_id=students_info.trade_id and students_info.stid=students.stid and students.sc_id={$_SESSION['sc_id']} and levels.lev_id=students_info.lev_id order by students.st_fname ASC");
}
return $sele;
}

// end of students
// select Company
public static function company($value=''){
  $conn=self::connect();
  $sel_co=$conn->query("SELECT * FROM company where sc_id='".$_SESSION['sc_id']."'");
  return $sel_co;
}
// end of company

// internships
public static function internaship($value=''){
  $conn=self::connect();
  if (!empty($value)) {
    $select=$conn->query("SELECT * FROM av_internaship,trade,company  where av_internaship.trade_id=trade.trade_id and av_internaship.c_id=company.c_id and av_internaship.sc_id='".$_SESSION['sc_id']."' and trade.trade_id='$value'");
  }
  else{
  $select=$conn->query("SELECT * FROM av_internaship,trade,company where av_internaship.trade_id=trade.trade_id and av_internaship.c_id=company.c_id and av_internaship.sc_id='".$_SESSION['sc_id']."'");

}
return $select;
}
// end of internships

// send emails
public static  function notify_email($emails='',$subj='',$body='',$data='')
{
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
  $mail->isSMTP(true);                      
  $mail->Host  = 'premium180.web-hosting.com';         
  $mail->SMTPAuth = true;             
  $mail->Username = 'noreply@idbk.ac.rw';        
  $mail->Password = 'Cyabingo12@';            
  $mail->SMTPSecure = 'tls';              
  $mail->Port  = 587;
  $mail->setFrom('noreply@idbk.ac.rw',$data);
  $mail->addAddress($emails);
  //$mail->addReplyTo($reply, $_SESSION['sc_abbr']);                                    
   $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subj;
    $mail->Body    = $body;
    $mail->send();
} 
catch (Exception $e) {
 ?>
    <script>
      window.alert("something went Wrong Try again")
      window.history.back()
    </script>
    <?php
} # code...
}
// end email

public static function select_school($value=''){
  $conn=self::connect();
  if (!empty($value)) {
  $sele=$conn->query("SELECT * FROM schools where sc_id='$value'");
  }
  else{
     $sele=$conn->query("SELECT * FROM schools"); 
  }
  return $sele;
}
//end of class
public static function applied($value=''){
  $conn=self::connect();
  if (!empty($value)) {
    $tr=$conn->query("SELECT * FROM students,students_info,applied_internaship,company where students.stid=students_info.stid and company.c_id='$value'");
  }
}
// check applicants internaship
public static function check_stage($value=''){
  $conn=self::connect();
$sel=$conn->query("SELECT * FROM applied_internaship,students_info where applied_internaship.stu_id=students_info.stu_id and students_info.stu_id='$value'and applied_internaship.app_status='Approved'");
return $sel;
}
// list of applied students

public static function applied_intern($value=''){
$conn=self::connect();

if (!empty($value)) {
  $selp=$conn->query("SELECT * FROM `applied_internaship`,students_info,students,av_internaship,company,levels WHERE students_info.stid=students.stid and applied_internaship.av_id=av_internaship.av_id and company.c_id=av_internaship.c_id and students_info.stu_id=applied_internaship.stu_id and applied_internaship.stu_id='$value' and levels.lev_id=students_info.lev_id and applied_internaship.app_status='Approved'");
}
else{
  $selp=$conn->query("SELECT * FROM `applied_internaship`,students_info,students,av_internaship,company,levels WHERE students_info.stid=students.stid and applied_internaship.av_id=av_internaship.av_id and company.c_id=av_internaship.c_id and students_info.stu_id=applied_internaship.stu_id and students_info.sc_id='".$_SESSION['sc_id']."' and levels.lev_id=students_info.lev_id");
}
return $selp;
}
//end of applied students
public static function uploaded($value='',$type=''){
  $conn=self::connect();
  if (!empty($value) && !empty($type)) {
    $sel=$conn->query("SELECT * FROM students,students_info,reports where students.stid=students_info.stid and students_info.stu_id=reports.stu_id and students_info.sc_id='".$_SESSION['sc_id']."' and reports.stu_id='$value' and reports.type='$type'");
  }
  else{
    $sel=$conn->query("SELECT * FROM students,students_info,reports where students.stid=students_info.stid and students_info.stu_id=reports.stu_id and students_info.sc_id='".$_SESSION['sc_id']."' and reports.type='$type'");
  }
  return $sel;
}

// unuploaded
public static function check_reporting($type='',$claid='',$week='',$ty=''){
  $conn=self::connect();
  if (!empty($type) && empty($ty)) {
    $sel=$conn->query("SELECT * FROM students,students_info,reports,trade where trade.trade_id=students_info.trade_id and students.stid=students_info.stid and students_info.stu_id=reports.stu_id and students_info.sc_id='".$_SESSION['sc_id']."' and reports.type!='$type' and students_info.trade_id='$claid' and reports.week='$week'");
  }
  else{
     $sel=$conn->query("SELECT * FROM students,students_info,reports,trade where trade.trade_id=students_info.trade_id and students.stid=students_info.stid and students_info.stu_id=reports.stu_id and students_info.sc_id='".$_SESSION['sc_id']."' and reports.type='$type' and students_info.trade_id='$claid' and reports.week='$week' and reports.feed_back='$ty'");
  }

  return $sel;
}
// end of unuploded

//check company internaship
public static function check_applied($value=''){
  $conn=self::connect();
  if (!empty($value)) {
    $selo=$conn->query("SELECT * FROM schools,students_info,students,trade,av_internaship,applied_internaship,company WHERE students_info.stid=students.stid and students_info.stu_id=applied_internaship.stu_id and av_internaship.c_id=company.c_id and applied_internaship.av_id=av_internaship.av_id and av_internaship.c_id='$value' and schools.sc_id=students.sc_id and trade.trade_id=av_internaship.trade_id and students_info.sc_id='".$_SESSION['sc_id']."'");
  }
  else{
    echo "HHHHH";
  }
  return $selo;
}
//end of internship
public static function company_reports($value='',$type=''){
  $conn=self::connect();
  if (!empty($value)) {
  $sele=$conn->query("SELECT * FROM `company_reports`,students_info,students,company where students_info.stu_id=company_reports.stu_id and students.stid=students_info.stid and company.c_id=company_reports.c_id and students_info.stu_id='$value' and company_reports.c_type='$type'");
}
elseif (!empty($type)) {
  $sele=$conn->query("SELECT * FROM `company_reports`,students_info,students,company,trade where students_info.stu_id=company_reports.stu_id and students.stid=students_info.stid and trade.trade_id=students_info.trade_id and company.c_id=company_reports.c_id and students_info.trade_id='$value' and company_reports.c_type='$type'");
}
else{
  $sele=$conn->query("SELECT * FROM `company_reports`,students_info,students,company where students_info.stu_id=company_reports.stu_id and students.stid=students_info.stid and company.c_id=company_reports.c_id and company_reports.c_type='$type' and company.c_id='$value'");
}
return $sele;

}
public static function attendance($value='',$user=''){
  $conn=self::connect();
  if (!empty($value)) {
  $ds=$conn->query("SELECT * FROM students_info,attendance,students,levels where students_info.stu_id=attendance.stu_id and students.stid=students_info.stid and attendance.c_id and students_info.sc_id='".$_SESSION['sc_id']."' and levels.lev_id='$value' and levels.lev_id
    =students_info.lev_id");
}
elseif (!empty($user)) {
  $ds=$conn->query("SELECT * FROM students_info,attendance,students,levels where students_info.stu_id=attendance.stu_id and students.stid=students_info.stid and attendance.c_id and students_info.sc_id='".$_SESSION['sc_id']."' and students_info.stu_id='$user' and levels.lev_id
    =students_info.lev_id");
}
else{
   $ds=$conn->query("SELECT * FROM students_info,attendance,students where students_info.stu_id=attendance.stu_id and students.stid=students_info.stid and attendance.c_id and attendance.c_id='".$_SESSION['userid']."'");
}
return $ds;
// end attendance
}
// sms
public static function sms($tel='',$message='',$from='')
{
  //
include 'api_composer/autoload.php'; 
$username   = "CrossOver2023"; //environment username for testing
 $apiKey     = "162e6517fe33cca7df43026d8405e0df1a455c6ba255eb8dfb1a480a8edbd378"; //environment api key for tessting your App is

// Initialize the SDK
$AT         = new AfricasTalking\SDK\AfricasTalking($username, $apiKey);

// Get the SMS service
$sms        = $AT->sms();

// Set the numbers you want to send to in international format
$recipients =$tel;
// excute when all feature are ok

try {
    // code for sending message
    $result = $sms->send([
        'to'      => $recipients,
        'message' => $message,
        'from'    => $from
    ]);

   //print_r($result);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}
}
//end fo function
// end of Sms












}
} 

 ?>
