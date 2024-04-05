<?php
session_start();
include('db.php');

$email = mysqli_real_escape_string($db, $_POST['email']);
$password = $_POST['password'];

// Basic input validation
if (empty($email) || empty($password)) {
    header("Location: login.php?error=empty_fields");
    exit();
} else {
    // Prepared statement to prevent SQL injection
    $sql = "SELECT user_id, firstname, lastname, email, password FROM chefadmin WHERE email = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    // Check if user exists
    if (mysqli_stmt_num_rows($stmt) == 1) {
        // Bind result variables
        mysqli_stmt_bind_result($stmt, $user_id, $firstname, $lastname, $db_email, $hashed_password);
        mysqli_stmt_fetch($stmt);

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $user_id;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $db_email;
            header("Location: index.php"); // Redirect to dashboard or any other authenticated page
            exit();
        } else {
            // Password is incorrect
            header("Location: login.php?error=incorrect_password");
            exit();
        }
    } else {
        // User not found
        header("Location: login.php?error=user_not_found");
        exit();
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($db);
?>
