<?php
include "php/includes/main.php";
$description = $_POST['radiothing'];



if(!empty($description)){
    
        $DELETE = "DELETE FROM booking WHERE description = ?";
      
      $stmt = $conn->prepare($DELETE);
      $stmt->bind_param("s", $description);
      $stmt->execute();
      
      $stmt->close();
      $conn->close();
      header('location: https://theneilwebappandcrystalwebsitemaybe.000webhostapp.com/admin.php');
     }
    
 else{
    echo "All field are required";
    die();
}

?>