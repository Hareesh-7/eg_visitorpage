
<?php
	include('../php/connection.php');
	$sql = "select * from visitordata";
	$result = $conn->query($sql);

    session_start();
    if (!$_SESSION["registration"]) {
        header("Location: index.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EG Visitor Portal - User Info</title>
    <link rel="shortcut icon" href="../img/EG-logo-rbg.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>

    <header class="container-fluid navbar-dark bg-color">
        <nav class="navbar navbar-expand-lg container-fluid">
            <a class="navbar-brand" href="https://eswarigroup.com">
                <img src="../img/EG-logo-rbg.png" alt="Eswari Group logo" height="90px">
            </a>    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

                <ul class="navbar-nav mt-2 mt-lg-0 pb-5 mr-5">
                    <li class="nav-item active h4 font-weight-bold">
                        <a class="nav-link" href="admin.php">Appointments</a>
                    </li>
                    <li class="nav-item h4">
                        <a class="nav-link" href="userInfo.php">User Info</a>
                    </li>
                    <li class="nav-item h4">
                        <a class="nav-link" href="../php/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="container">
        <?php
            $count = $result->rowCount();
            if ($count > 0) {
                echo "
                    <h1 class='text-center my-5'>USER INFORMATION</h1>
                    <table class='table table-hover'>
                        <tr class='bg-dark text-light'>
                            <th scope='col'>ID</th>
                            <th scope='col'>Full Name</th>
                            <th scope='col'>Mobile Number</th>
                            <th scope='col'>Email Address</th>
                            <th scope='col'>Need</th>
                            <th scope='col'>Message</th>
                            <th scope='col'>Delete</th>
                        </tr>
                ";
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "
                        <tr class='bg-light'>
                            <td scope='col'>" . $row['vid'] . "</td>
                            <td scope='col'>" . $row['name'] . "</td>
                            <td scope='col'>" . $row['mobile'] . "</td>
                            <td scope='col'>" . $row['email'] . "</td>
                            <td scope='col'>" . $row['need'] . "</td>
                            <td scope='col'>" . $row['message'] . "</td>
                            <td scope='col'>
                                <a href=../php/delete.php?mobile=" . $row['mobile'] . " name=delete>delete</a>
                            </td>
                        </tr>";
                }

                echo "</table>";
            } else {
                echo "
                    <h1 class='text-center mt-5'>No users found</h1>";
            }
        ?>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>

<?php
    }
?>