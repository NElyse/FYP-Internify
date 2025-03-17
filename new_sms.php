<?php include 'conn.php';
if (isset($_POST['send'])) {
  proj::sms('+250724866016','Dear Elyse Your Internaship to Internify has been Approved Thank you','LMBTECH_LTD');
}
?>
<form method="POST">
  <button type="submit" name="send">Send</button>
</form>