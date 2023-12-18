<?php
include 'auth_functions.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $authResult = authenticateUser($email, $password);


    if ($authResult['success']) {
        if ($authResult['role'] === 'admin') {
            header('Location: admin_page.php');
        } else {
            header('Location: welcome.php'); 
        }
        exit();
    } else {
        $error = "Invalid email or password.";
        include 'index.php';
    }
}
?>
