
<?php
	include("connection.php");
	if(isset($_POST['register'])) {
		// $id = 2;
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user_type = "user";

	}
    
	$sql="insert into registration (name,mobile,email,password,user_type) values(?,?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$data=array($name,$mobile,$email,$password,$user_type);
	// var_dump($data);
	$stmt->execute($data);

	header('location:../pages/index.php');
	echo("form submitted");
?>

