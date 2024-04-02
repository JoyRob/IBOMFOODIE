<?php
session_start();
include('db.php');

$firstname = mysqli_real_escape_string($db, $_POST['first_name']);
$lastname = mysqli_real_escape_string($db, $_POST['last_name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmpassword)) {
    echo "All fields are required";
} elseif ($password !== $confirmpassword) {
    echo "Password and confirm password are not the same";
} else {
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO register (firstname, lastname, email, gender, password) VALUES ('$firstname', '$lastname', '$email', '$gender', '$hashed_password')";
    $result = mysqli_query($db, $sql);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "Something went wrong!";
    }
}
?>
