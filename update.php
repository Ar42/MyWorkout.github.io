<?php

include 'conn.php';
if(isset($_POST['done'])){
	$id= $_GET['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$q = "UPDATE `crudtable` SET `id`=$id, username= '$username', password='$password' where id=$id";
	$query=mysqli_query($con, $q);
	header('location:display.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-lg-6 m-auto">
		<form method="post">
			<br><div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white text-center" style="font-size: 1.5vw;">Update Details</h1>
				</div>
				<br><label style="font-size: 1.5vw;">Username</label>
				<input type="text" name="username" class="form-control"><br>
				<label style="font-size: 1.5vw;">Password</label>
				<input type="text" name="password"><br>
				<button class="btn btn-success" type="submit"class="form-control" name="done">submit</button>
				
			</div>
			
		</form>
	</div>

</body>
</html>