<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ibomfoodie";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE email = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        
        $result = $stmt->get_result();

        
        if ($result->num_rows == 1) {
            
            $user = $result->fetch_assoc();

            
            if (password_verify($password, $user['password'])) {
                
                header("Location: home.php");
                exit();
            } else {
                
                $error_message = "Invalid email or password. Please try again.";
            }
        } else {
            
            $error_message = "Invalid email or password. Please try again.";
        }

        $stmt->close();
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/thefooter.css">
    <link rel="stylesheet" href="css/footer.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>LOGIN</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
        <?php if (isset($error_message)) { ?>
            <p><?php echo $error_message; ?></p>
        <?php } ?>
        <form method="post">
            <br><br>
            <p>Don't have an account yet?</p>
            <a href="signup.html">Click to Signup</a><br><br>
        </form>
    </div>
</body>
</html>
