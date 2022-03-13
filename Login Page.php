<?php session_start(); if(!empty($_SESSION['name'])) {header('Location: https://theneilwebappandcrystalwebsitemaybe.000webhostapp.com/Events%20Page.php');}?>

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


    <a class="fas fa-arrow-left fa-4x mx-3 my-2" href=index.html></a>
    




    <div class="col-12">
        <div class="card border-primary mb-3 mt-3 d-flex mx-auto" style="max-width: 18rem;">
            <div class="card-header fs-1">Log In</div>

            <div class="card-body text-primary">
                <div class="row">
                    <form action="php/login_and_signup/login.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name = "email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name = "password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button><br>
                            <a href="#">Forgot password?</a>
                        </div>

                    </form>
                </div>
            </div>
            <div class="card-footer text-center">New User?<br>
                <a class="btn btn-primary" href="Sign Up Page.php" role="button">Sign Up</a>
            </div>
        </div>
    </div>



</body>

</html>