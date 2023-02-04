<?php
    include('connection.php');
    if (isset($_POST['login'])) {
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
    }
    $query = "select * from registration where mobile = '" . $mobile . "' and password='" . $password . "'";

    $result = $conn->query($query);

    if ($result->rowCount() > 0) {
        session_start();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $_SESSION['registration'] = $row['mobile'];

        if ($row['user_type'] == 'admin') {
            header('location:../pages/admin.php');
        } else {
            header('location:../index.php');
        }
    } else {
        echo ("We are NOT getting your details from given details");
    }
?>