<?php
session_start();
include "php/includes/main.php";

$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($email) || !empty($password)){
    
        $SELECT = "SELECT * FROM login WHERE email = ? LIMIT 1";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $fetchedData = $stmt->get_result();
        if ($fetchedData->num_rows == 1){
            while ($data = $fetchedData->fetch_assoc()) {
                if ($password == $data['password']){
                    if ($email == "admin@gmail.com" || $data['username'] == "admin") {
                        $_SESSION['email'] = $email;
                        $_SESSION['name'] = $data['username'];
                    
                        header('Location: https://theneilwebappandcrystalwebsitemaybe.000webhostapp.com/admin.php');
                    } else{
                        $_SESSION['email'] = $email;
                        $_SESSION['name'] = $data['username'];
                    
                    header('Location: https://theneilwebappandcrystalwebsitemaybe.000webhostapp.com/Events%20Page.php');
                    }
                } else {
                    echo "not right password dummy";
                }
            }
        } else {
            echo "no email there boss man";
        }
    } 


$stmt->close();
$conn->close();
?>