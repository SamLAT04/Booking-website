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

<body class="body-primary">
    <ul class="nav nav-tabs">
        <a href="https://www.bsdc.ac.uk/" target="_blank">
            <img src="img/bsdclogo.png" href="https://www.bsdc.ac.uk/" alt="BSDC logo" width="100" height="60">
        </a>
        <li class="nav-item li-primary">
            <a class="nav-link mt-4" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item nav-item li-primary">
            <a class="nav-link active mt-4" href="Events Page.php">Events</a>
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






    
    <div class="card-body">
        <div class="container">
            
            <form action="php/booking/add_booking.php" method="POST">
                <table class="table table-striped table align-middle">
                    <thead>
                        <tr>
                            <th class="col-primary" scope="col">Time</th>
                            <th class="col-primary" scope="col">Date</th>
                            <th class="col-primary" scope="col">Event</th>
                            <th class="col-primary" scope="col">Description</th>
                            <th class="col-primary" scope="col">Book?</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php
                            $email = "";
                            $name = "";
                            
                            $list = 0;
                            
                            if(true){
                                include "php/includes/main.php";
                                    $SELECT = "SELECT time,date,event,description FROM booking WHERE (email = ?) AND (name = ?)";
                                  
                                  $stmt = $conn->prepare($SELECT);
                                  $stmt->bind_param("ss", $email, $name);
                                  $stmt->execute();
                                  $fetchedData = $stmt->get_result();
                                 while ($data = $fetchedData->fetch_assoc()) {
                                    foreach($data as $value){
                                        $list += 1;
                                        if ($list == 5){
                                            echo "</tr><tr>";
                                            $list = 1;
                                        }
                                        echo '<td class="td-primary">'. $value. '</td>';
                                        
                                    }
                                    echo '<td><input type="radio" name="radiothing" value = "'. $value . '"></td>';
                                    echo "</tr>";
                                    
                                 }
                                 echo '<td><button class="btn btn-primary">Book</button></td>';
                                  $stmt->close();
                                  $conn->close();
                                  
                                 }
                                
                             else{
                                echo "All field are required";
                                die();
                            }
                            
                            ?>
            
                    </tbody>
                </table>
            </form>
           

        </div>

    </div>









    </div>






</body>

</html>