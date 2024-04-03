<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        
        $_SESSION["user_id"] = 1; 
        header("Location: Recipelist.html"); 
        exit();
    } else {
        header("Location: login.php?error=missing_fields");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>