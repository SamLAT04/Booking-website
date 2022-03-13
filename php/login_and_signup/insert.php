<?php
include "php/includes/main.php";

$email = $_POST['email'];
$username = $_POST['name'];
$password = $_POST['password'];

if(!empty($email) || !empty($username) || !empty($password)){
     
      $SELECT = "SELECT email From login Where email = ? Limit 1";
      $INSERT = "INSERT Into login (email, username, password) values(?, ?, ?)";
      
      $stmt = $conn->prepare($SELECT);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $stmt->bind_result($email);
      $stmt->store_result();
      $rnum = $stmt->num_rows;
      if ($rnum==0) {
       $stmt->close();
       $stmt = $conn->prepare($INSERT);
       $stmt->bind_param("sss",  $email, $username, $password);
       $stmt->execute();
       header('Location: https://theneilwebappandcrystalwebsitemaybe.000webhostapp.com/Login%20Page.php');
      } else {
       echo "Someone already register using this email";
      }
      $stmt->close();
      $conn->close();
     }

 else{
    echo "All field are required";
    die();
}

?>