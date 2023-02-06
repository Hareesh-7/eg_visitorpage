
<?php
	include("connection.php");
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
        $mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$need = $_POST['need'];
		$message = $_POST['message'];

	}
	$sql="insert into visitordata (name,mobile,email,need,message) values(?,?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$data=array($name,$mobile,$email,$need,$message);
	// var_dump($data);
	$stmt->execute($data);

	echo "
		<div style=margin:50px 50px'>
			<p>message submitted</p>
			<P><a href='../index.php'>Click here</a> to Home page.</p>
		</div>
	";
?>

