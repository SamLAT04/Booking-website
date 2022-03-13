<?php
include "php/includes/main.php";
$time = $_POST['time'];
$date = $_POST['date'];
$event = $_POST['event'];
$description = $_POST['description'];
$email = "";
$name = "";


if(!empty($time) || !empty($date) || !empty($event) || !empty($description)){
    
        $INSERT = "INSERT Into booking (time, date, event, description, email, name) values(?, ?, ?, ?, ?, ?)";
      
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssss", $time, $date, $event, $description, $email, $name);
      $stmt->execute();
      
      $stmt->close();
      $conn->close();
      header('Location: https://theneilwebappandcrystalwebsitemaybe.000webhostapp.com/admin.php');
     }
    
 else{
    echo "All field are required";
    die();
}

?>