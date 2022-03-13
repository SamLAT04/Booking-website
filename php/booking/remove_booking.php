<?php
session_start();
include "php/includes/main.php";

$email = "";
$name = "";
$addBooking = $_POST['radiothing'];


if(!empty($email) || !empty($addBooking)){
     
      $UPDATE = "UPDATE booking SET email = ?, name = ? WHERE description = ?";
      
      $stmt = $conn->prepare($UPDATE);
      $stmt->bind_param("sss", $email, $name, $addBooking);
      $stmt->execute();
      
      $stmt->close();
      $conn->close();
     header('location: https://theneilwebappandcrystalwebsitemaybe.000webhostapp.com/My%20Bookings%20Page.php');
        
    }

 else{
    echo "All field are required";
    die();
}

?>