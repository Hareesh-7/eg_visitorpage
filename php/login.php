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
            echo "
                <script>
                    alert('Hii $row[name], Welcome to ESWARI GROUP Visitor Page ');
                    window.location.href='../index.php';
                </script>
            ";
            // header('location:../index.php');
           
        }
    } else {
        echo ("We are NOT getting your details from given details");
        echo "
            <p>
                If not a registered user <a href='../pages/registration.php'>click here</a> for registration.
                <br><br>
                If already a registered user <a href='../pages/index.php'>click here</a> for re-login.
            </p>
        ";
    }
