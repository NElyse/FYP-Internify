<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Internify</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../table/css/dataTables.bootstrap4.min.css">
</head>
<?php
  session_start();
  include('../conn.php');
  
  if (!isset($_SESSION['userid']) ||(trim ($_SESSION['userid']) == '')) {
  header('location:../');
    exit();
  }
 if (isset($_SESSION['last_request']) && time()-$_SESSION['last_request']>900) {
    session_unset();
    session_destroy();
    header('location:../');
  }
  else{
    $_SESSION['last_request']=time();
  }