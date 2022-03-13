<?php session_start();
if ($_SESSION['email'] != "admin@gmail.com"){
    header('Location: https://theneilwebappandcrystalwebsitemaybe.000webhostapp.com/index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <form method="POST" action="php/login_and_signup/logout.php">  
        <button type="submit" class="btn btn-primary">SignOut</button>
     </form>  
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card border-primary mb-3 mt-3 d-flex mx-auto" style="max-width: 18rem;">
            <div class="card-header fs-1">create booking</div>
            <div class="card-body text-primary">
                <div class="row">
                    <form action="php/booking/create_booking.php" method="POST">
                        <label for="time" class="form-label">time</label>
                        <input type="text" id="time" class="form-control" name="time" required>
                        <label for="date" class="form-label">date</label>
                        <input type="text" id="date" class="form-control" name="date" required>
                        <label for="event" class="form-label">event</label>
                        <input type="text" id="event" class="form-control" name="event" required>
                        <label for="description" class="form-label">description</label>
                        <input type="text" id="description" class="form-control" name="description" required>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<form action="php/booking/delete_booking.php" method="POST">
<table class="table table-striped table align-middle">
                    <thead>
                        Empty Bookings
                        <tr>
                            <th class="col-primary" scope="col">Time</th>
                            <th class="col-primary" scope="col">Date</th>
                            <th class="col-primary" scope="col">Event</th>
                            <th class="col-primary" scope="col">Description</th>
                            <th class="col-primary" scope="col">Delete</th>
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
                                 echo '<td><button class="btn btn-primary">Delete</button></td>';
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

<form action="php/booking/delete_booking.php" method="POST">
<table class="table table-striped table align-middle">
                <thead>
                    filled Bookings
                    <tr>
                        <th class="col-primary" scope="col">Name</th>
                        <th class="col-primary" scope="col">Email</th>
                        <th class="col-primary" scope="col">Time</th>
                        <th class="col-primary" scope="col">Date</th>
                        <th class="col-primary" scope="col">Event</th>
                        <th class="col-primary" scope="col">Description</th>
                        <th class="col-primary" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                        $email = "";
                        $name =  "";
                        
                        $list = 0;
                        
                        $list = 0;
                            
                            if(true){
                                $host = "localhost";
                                $dbUsername = "id16460650_loginusername";
                                $dbPassword = "k0prEXs\!^/nPLyo";
                                $dbname = "id16460650_login";
                            
                                $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
                            
                                if (mysqli_connect_error()) {
                                    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
                                } else{
                                    $SELECT = "SELECT name,email,time,date,event,description FROM booking WHERE (email != ?) AND (name != ?)";
                                  
                                  $stmt = $conn->prepare($SELECT);
                                  $stmt->bind_param("ss", $email, $name);
                                  $stmt->execute();
                                  $fetchedData = $stmt->get_result();
                                 while ($data = $fetchedData->fetch_assoc()) {
                                    foreach($data as $value){
                                        $list += 1;
                                        if ($list == 7){
                                            echo "</tr><tr>";
                                            $list = 1;
                                        }
                                        echo '<td class="td-primary">'. $value. '</td>';
                                        
                                    }
                                    echo '<td><input type="radio" name="radiothing" value = "'. $value . '"></td>';
                                    echo "</tr>";
                                    
                                 }
                                 echo '<td><button class="btn btn-primary">Delete</button></td>';
                                  $stmt->close();
                                  $conn->close();
                                  
                                 }
                                }
                             else{
                                echo "All field are required";
                                die();
                            }
                        
                        ?>
        
                </tbody>
            </table>
</form>
</body>
</html>