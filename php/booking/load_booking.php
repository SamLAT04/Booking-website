<?php
session_start();
include "php/includes/main.php";

$email = $_SESSION["email"];
$addBooking = $_POST['radiothing'];


if(!empty($email) || !empty($addBooking)){
     
      $UPDATE = "UPDATE booking SET email = ? WHERE description = ?";
      
      $stmt = $conn->prepare($UPDATE);
      $stmt->bind_param("ss", $email, $addBooking);
      $stmt->execute();
      
      $stmt->close();
      $conn->close();
     header('location: https://theneilwebappandcrystalwebsitemaybe.000webhostapp.com/Events%20Page.php');
        
    }

 else{
    echo "All field are required";
    die();
}

?>