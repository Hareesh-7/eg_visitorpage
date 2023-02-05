<?php
include_once('../php/connection.php');
$mobile = $_GET['mobile'];
$query = "select * from registration where mobile = '" . $mobile . "'";

$result = $conn->query($query);

$row = $result->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EG Visitor Portal - User Update</title>
    <link rel="shortcut icon" href="../img/EG-logo-rbg.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>

    <header class="container-fluid navbar-dark bg-color">
        <nav class="navbar navbar-expand-lg container">
            <a class="navbar-brand" href="https://eswarigroup.com">
                <img src="../img/EG-logo-rbg.png" alt="" height="60px" class="border-2">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/index.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    
    <div class="container">
        <div class="form-holder">
            <div class="form-content">

                <div class=" text-center my-5 ">
                    <h1>User Registration Form</h1>
                </div>
                <div class="row ">
                    <div class="col-lg-7 mx-auto">
                        <div class="card mt-0 mx-auto p-4 bg-dark">
                            <div class="card-body bg-dark text-white">

                                <div class="container">
                                    <form action="../php/update.php" method="post" id="contact-form" role="form">
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_name" class="text-white">Full Name</label>
                                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your full name " value="<?php echo $row['name']; ?>" required="required" data-error="Firstname is required.">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_mobile" class="text-white">Mobile</label>
                                                        <input id="form_mobile" type="text" name="mobile" class="form-control" placeholder="Enter your mobile " value="<?php echo $row['mobile']; ?>" required="required" data-error="mobile is required.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_email" class="text-white">Email</label>
                                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email " value="<?php echo $row['email']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_password" class="text-white">Password</label>
                                                        <input id="form_password" type="password" name="password" class="form-control" placeholder="Add your password " value="<?php echo $row['password']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group border-info">
                                                        <label for="form_user_type" class="text-white">User_Type</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <select name="user_type"  class="form-control col-md-12" id="form_user_type" >
                                                            <option value="user">User</option>
                                                            <option value="admin">Admin</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mt-3">
                                                    <input type="submit" name="update" class="btn btn-success btn-send  pt-2 btn-block" value="Update User">
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>














<!-- 

    <div class="reg">
        <h1>Update Form</h1>
        <form action="../php/update.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>Name</th>
                    <th>:</th>
                    <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                </tr>
                <tr>
                    <th>Number</th>
                    <th>:</th>
                    <td><input type="number" name="mobile" value="<?php echo $row['mobile']; ?>"></td>
                </tr>
                <tr>
                    <th>Email ID</th>
                    <th>:</th>
                    <td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <th>:</th>
                    <td><input type="text" name="password" value="<?php echo $row['password']; ?>"></td>
                </tr>
                <tr>
                    <th>User Type</th>
                    <th>:</th>
                    <td><select name="user_type">
                            <option>User</option>
                            <option>Admin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center">
                        <input type="submit" value="UPDATE" name="update">
                        <input type="reset" value="RESET" name="reset">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </div> -->
</body>

</html>