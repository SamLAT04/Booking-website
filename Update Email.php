<?php session_start();?>
<html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <link href="fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">

    <link href="css.css" rel="stylesheet">

    <title> BSDC </title>
    <link rel="shortcut icon" type="image/png" href="img/bsdc.png" />

</head>

<body>
    <ul class="nav nav-tabs">
        <a href="https://www.bsdc.ac.uk/" target="_blank">
            <img src="img/bsdclogo.png" href="https://www.bsdc.ac.uk/" alt="BSDC logo" width="100" height="60">
        </a>
        <li class="nav-item li-primary">
            <a class="nav-link mt-4" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item nav-item li-primary">
            <a class="nav-link mt-4" href="Events Page.php">Events</a>
        </li>
        <li class="nav-item nav-item li-primary">
            <a class="nav-link mt-4" href="My Bookings Page.php">My Bookings</a>
        </li>
        <li class="nav-item nav-item li-primary">
            <a class="nav-link mt-4" href="Login Page.php" <?php if(!empty($_SESSION['name'])) {echo 'style = "display:none;"';}?>>login/signup</a>
        </li>
        <li class="nav-item dropdown mt-4 nav-item li-primary">
            <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false" <?php if(empty($_SESSION['name'])) {echo 'style = "display:none;"';}?>><?php echo $_SESSION['name'];?></a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Update Password.php">Change Password</a></li>
                <li><a class="dropdown-item" href="Update Email.php">Change Email</a></li>
                <li><a class="dropdown-item" href="php/login_and_signup/logout.php">Log Out</a></li>
            </ul>
        </li>

    </ul>



    <div class="col-12">
        <div class="card border-primary mb-3 mt-3 d-flex mx-auto" style="max-width: 18rem;">
            <div class="card-header fs-1">Change Email</div>

            <div class="card-body text-primary">
                <div class="row">
                    <form action="php/login_and_signup/emailchange.php" method="POST">
                        <div class="mb-3">
                            <label for="oldemail" class="form-label">Current Email Address</label>
                            <input type="email" class="form-control" id="oldemail" aria-describedby="emailHelp"
                            name = "oldemail">
                        </div>
                        <div class="mb-3">
                            <label for="newemail" class="form-label">New Email Address</label>
                            <input type="email" class="form-control" id="newemail" name = "newemail">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Email</button><br>
                        </div>

                    </form>
                </div>
            </div>
            <div class="card-footer text-center">New User?<br>
                <a class="btn btn-primary" href="Sign Up Page.html" role="button">Sign Up</a>
            </div>
        </div>
    </div>



</body>

</html>