<?php

	include('db.php');

	if (isset($_POST['submit'])){
		
		$username = $_POST['uname'];
		$email = $_POST['email'];
		$password = $_POST['psw'];
		$Cpassword = $_POST['pswtest'];
 
		

		$sql = "INSERT INTO user(UserName,Email,Password)
		 VALUES('$username','$email','$password')";

			if ($password == $Cpassword){
				$query = mysqli_query($conn,$sql);
				if ($query) {
					echo "data was successfull inserted" ;
				}else{

					echo $conn->error;
				}
			}
			else {
				echo "data was not entered";
			}
	}
	
?>