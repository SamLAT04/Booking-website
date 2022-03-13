<?php
session_start();
include "php/includes/main.php";

$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$email = $_SESSION['email'];

if(!empty($oldpassword) || !empty($newpassword) || !empty($email)){
    
      $SELECT = "SELECT password From login Where email = ? Limit 1";
      $UPDATE = "UPDATE login SET password = ? WHERE email = ?";

      $stmt = $conn->prepare($SELECT);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $stmt->bind_result($email);
      $stmt->store_result();
      $rnum = $stmt->num_rows;
      if ($rnum==1) {
        $stmt = $conn->prepare($UPDATE);
        $stmt->bind_param("ss",  $newpassword, $email);
        $stmt->execute();
        header('Location: https://theneilwebappandcrystalwebsitemaybe.000webhostapp.com/Login%20Page.php');
      } else {
       echo "This password is incorrect";
      }
      $stmt->close();
      $conn->close();
     }
    else{
        echo "All field are required";
        die();
    }
?>