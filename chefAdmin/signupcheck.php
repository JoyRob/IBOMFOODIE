<?php
session_start();
include('db.php');

$firstname = mysqli_real_escape_string($db, $_POST['first_name']);
$lastname = mysqli_real_escape_string($db, $_POST['last_name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

// Basic input validation
if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmpassword)) {
    echo "All fields are required";
} elseif ($password !== $confirmpassword) {
    echo "Password and confirm password are not the same";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
} else {
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepared statement to prevent SQL injection
    $sql = "INSERT INTO chefadmin (firstname, lastname, email, gender, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $gender, $hashed_password);

    if (mysqli_stmt_execute($stmt)) {
        // Registration successful
        header("Location: login.php");
        exit();
    } else {
        echo "Something went wrong!";
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($db);
?>
