<?php
include "php/includes/main.php";
$oldemail = $_POST['oldemail'];
$newemail = $_POST['newemail'];

if(!empty($oldemail) || !empty($newemail)){
    
      $SELECT = "SELECT email From login Where email = ? Limit 1";
      $UPDATE = "UPDATE login SET email = ? WHERE email = ?";

      $stmt = $conn->prepare($SELECT);
      $stmt->bind_param("s", $oldemail);
      $stmt->execute();
      $stmt->bind_result($oldemail);
      $stmt->store_result();
      $rnum = $stmt->num_rows;
      if ($rnum==1) {
        $stmt->close();
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $newemail);
        $stmt->execute();
        $stmt->bind_result($newemail);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum==0) {
            $stmt = $conn->prepare($UPDATE);
            $stmt->bind_param("ss",  $newemail, $oldemail);
            $stmt->execute();
            echo "email change success";
        }else{
            echo "the new email already exists";
        }
      } else {
       echo "This email doesnt exist";
      }
      $stmt->close();
      $conn->close();
     }
    else{
        echo "All field are required";
        die();
    }
?>
