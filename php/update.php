<?php
    include('./connection.php');
    if (isset($_POST['update'])){
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];
    }

   	$sql = "update registration set name='".$name."', email='".$email."',password= '".$password."', user_type='".$user_type."' where mobile='".$mobile."'";
    // var_dump($sql);
    $result = $conn->query($sql);

    echo "User updated successfully";
	echo "<br>";
	echo "<P><a href='../index.php'>Click here</a> to Home page.</p>";
	echo "<P><a href='../pages/userInfo.php'>Click here</a> to User Information page.</p>";
?>


