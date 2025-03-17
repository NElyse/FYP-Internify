<?php
	include('conn.php');
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username1=check_input($_POST['username1']);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$username1)) {
			$_SESSION['msg'] = "Username should not contain space and special characters!"; 
			header('location: index.php');
		}
		else{
			
		$fusername=$username1;
		
		$password1 = check_input($_POST["password1"]);
		$fpassword=md5($password1);
		
		$query1=mysqli_query($conn,"select * from `users` where username='$fusername'");
		
		if(mysqli_num_rows($query1)==0){
			?>
				<script>
					window.alert('incorrect username, please enter valid username!');
					window.history.back()
				</script>
				<?php
		}
		else{

			 $query2=mysqli_query($conn,"select * from `users` where password='$fpassword'");
		
		if(mysqli_num_rows($query2)==0){
			?>
				<script>
					window.alert('incorrect password ,please enter valid password!');
					window.history.back()
				</script>
				<?php
		}
		else{

			 $query=mysqli_query($conn,"select * from users,schools where users.sc_id=schools.sc_id and users.username='$fusername' and users.password='$fpassword' and schools.status='Active now' and users.status='active'");

			 $row=mysqli_fetch_array($query);
			 if ($row['access']==1){

				$_SESSION['id']=$row['userid'];
				$_SESSION['school']=$row['sc_name'];
				$_SESSION['sc_id']=$row['sc_id'];
				$_SESSION['username']=$row['username'];
				$_SESSION['email']=$row['email'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['photo'] = $row['photo'];
				?>
				<script>
					window.alert('Welcome School Manager <?php echo $_SESSION['name'] ?>');
					window.location.href='admin1/';
				</script>
				<?php
			}
			else if ($row['access']==2){

				$_SESSION['id']=$row['userid'];
				$_SESSION['sc_id']=$row['sc_id'];
				$_SESSION['school']=$row['sc_name'];
				$_SESSION['username']=$row['username'];
				$_SESSION['email']=$row['email'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['photo'] = $row['photo'];
				?>
				<script>
					window.alert('Welcome Discpline Assissitant <?php echo $_SESSION['name'] ?>');
					window.location.href='animat/';
				</script>
				<?php
			}
			else if ($row['access']==3){

				$_SESSION['id']=$row['userid'];
				$_SESSION['school']=$row['sc_name'];
				$_SESSION['sc_id']=$row['sc_id'];
				$_SESSION['username']=$row['username'];
				$_SESSION['email']=$row['email'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['photo'] = $row['photo'];
				?>
				<script>
					window.alert('Welcome Dean of studies<?php echo $_SESSION['name'] ?>');
					window.location.href='dean/';
				</script>
				<?php
			}
				else if ($row['access']==4){

				$_SESSION['id']=$row['userid'];
                $_SESSION['sc_id']=$row['sc_id'];
				$_SESSION['username']=$row['username'];
				$_SESSION['email']=$row['email'];
				$_SESSION['school']=$row['sc_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['photo'] = $row['photo'];
				?>
				<script>
					window.alert('Welcome Stock Manager <?php echo $_SESSION['name'] ?>');
					window.location.href='stock/';
				</script>
				<?php
			}
			else if ($row['access']==5){

				$_SESSION['id']=$row['userid'];
                $_SESSION['sc_id']=$row['sc_id'];
				$_SESSION['username']=$row['username'];
				$_SESSION['email']=$row['email'];
				$_SESSION['school']=$row['sc_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['photo'] = $row['photo'];
				?>
				<script>
					window.alert('Welcome Teacher <?php echo $_SESSION['name'] ?>');
					window.location.href='teacher/';
				</script>
				<?php
			}

			else if ($row['access']==6){

				$_SESSION['id']=$row['userid'];
                $_SESSION['sc_id']=$row['sc_id'];
				$_SESSION['username']=$row['username'];
				$_SESSION['email']=$row['email'];
				$_SESSION['school']=$row['sc_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['photo'] = $row['photo'];
				?>
				<script>
					window.alert('Welcome accountant Manager <?php echo $_SESSION['name'] ?>');
					window.location.href='barsar/';
				</script>
				<?php
			}
				else{
                $_SESSION['id']=$row['userid'];
                $_SESSION['sc_id']=$row['sc_id'];
				$_SESSION['username']=$row['username'];
				$_SESSION['email']=$row['email'];
				$_SESSION['school']=$row['sc_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['photo'] = $row['photo'];
				?>
				<script>
					window.alert('you are not authorized to perform this action');
					window.history.back()
				</script>
				<?php
		}
		}
			}
			}
		}
?>