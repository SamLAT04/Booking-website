<?php
include "php/includes/main.php";

$email = $_POST['email'];
$name = $_POST['name']; 


if(!empty($time) || !empty($date) || !empty($event) || !empty($description)){
    
        $SELECT = "SELECT * FROM booking WHERE (email = ?) AND (name = ?)";
      
      $stmt = $conn->prepare($SELECT);
      $stmt->bind_param("ss", $email, $name);
      $stmt->execute();
      
      $stmt->close();
      $conn->close();
     }
    
 else{
    echo "All field are required";
    die();
}

?>