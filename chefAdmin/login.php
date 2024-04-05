<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/thefooter.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="containerr">
        <h2>LOGIN</h2>
        <form action="logincheck.php" method="post">
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit">Login</button>
            <?php
    // Check if an error message exists in the URL
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == "empty_fields") {
            echo "<p style=\"color: red;\">Please fill in all fields</p>";
        } elseif ($error == "incorrect_password") {
            echo "<p style=\"color: red;\">Incorrect email or password</p>";
        } elseif ($error == "user_not_found") {
            echo "<p style=\"color: red;\">User not found</p>";
        }
    }
    ?>
        </form>
		<form method="post">
			<br><br>
			<p>Don't have an account yet?</p>
			<a href="signup.php">Click to Signup</a><br><br>
		</form>
    </div>
    
</body><br>

<FOOter class="foot">
      
  <h5 style="color: white;">&copy; 2024 IBOM FOODIE GROUP LLC. <br> All Rights Reserved</h5>

  
</FOOter>

</html>
