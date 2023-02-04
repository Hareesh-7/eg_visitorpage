<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EG Visitor Portal - Login</title>
    <link rel="shortcut icon" href="../img/EG-logo-rbg.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="https://eswarigroup.com">
                <img src="../img/EG-logo-rbg.png" alt="" height="60px" class="border-2">
            </a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">

        <!--  -->

        <div class="form-holder">
            <div class="form-content">

                <div class=" text-center my-4 ">
                    <h1>User Login Form</h1>
                </div>
                <div class="row ">
                    <div class="col-lg-7 mx-auto">
                        <div class="card mt-0 mx-auto p-4 bg-dark">
                            <div class="card-body bg-dark text-white">

                                <div class="container">
                                    <form action="../php/login.php" method="post" id="contact-form" role="form">
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_mobile" class="text-white">User Registered Mobile Number</label>
                                                        <input id="form_mobile" type="text" name="mobile" class="form-control" placeholder="Please enter your registered mobile number" required="required" data-error="mobile is required.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_password" class="text-white">Password</label>
                                                        <input id="form_password" type="password" name="password" class="form-control" placeholder="Please enter your password " required="required" data-error="password is required.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 my-3">
                                                    <input type="submit" name="login" class="btn btn-success btn-send  pt-2 btn-block" value="Login">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p>
                                                    If not a registered user <a href="./registration.php">click here</a> for registration.
                                                </p>
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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>