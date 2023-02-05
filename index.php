<!DOCTYPE html>
<html lang="en">

<head>
<style>
        .aaa {
            color: green;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EG Visitor Portal - Visitor data entry</title>
    <link rel="shortcut icon" href="../img/EG-logo-rbg.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->


</head>

<body>
    
    <header class="container-fluid navbar-dark bg-color">
        <nav class="navbar navbar-expand-lg container-fluid">
            <a class="navbar-brand" href="https://eswarigroup.com">
                <img src="./img/EG-logo-rbg.png" alt="" height="90px" class="border-2">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            

            <div class="collapse navbar-collapse mr-5" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

                <ul class="navbar-nav mt-lg-0 mr-5 pb-5">
                    <li class="nav-item active h4 font-weight-bold">
                        <a class="nav-link aaa" href="index.php">Home</a>
                    </li>
                    <li class="nav-item h4">
                        <a class="nav-link" href="./pages/index.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">

        <!--  -->

        <div class="form-holder">
            <div class="form-content">

                <div class=" text-center mt-3 ">
                    <h1>Visitor Contact Form</h1>
                </div>
                <div class="row ">
                    <div class="col-lg-7 mx-auto">
                        <div class="card mt-0 mx-auto p-4 bg-dark">
                            <div class="card-body bg-dark text-white">

                                <div class="container">
                                    <form action="./php/dataSubmit.php" method="post" id="contact-form" role="form">
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_name" class="text-white">Full Name</label>
                                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your full name " required="required" data-error="Firstname is required.">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_mobile" class="text-white">Mobile</label>
                                                        <input id="form_mobile" type="text" name="mobile" class="form-control" placeholder="Please enter your mobile " required="required" data-error="mobile is required.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_email" class="text-white">Email</label>
                                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email ">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_need" class="text-white">Please specify your need</label>
                                                        <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                                            <option value="" selected disabled>--Select Your Issue--</option>
                                                            <option>For Homes</option>
                                                            <option>For Technologies</option>
                                                            <option>For Infrastructures</option>
                                                            <option>Other</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_message" class="text-white">Message</label>
                                                        <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                                    </div>

                                                </div>

                                                <div class="col-md-12 mt-2">
                                                    <input type="submit" name="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Send Message">
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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>