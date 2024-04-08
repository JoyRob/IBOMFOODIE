<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    header("Location: login.php");
    exit; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

  <title>Log in</title>
<link rel="stylesheet" href="css/thefooter.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body class="body">

  <HEAder>
    <nav class="navbar border py-0
     navbar-expand-sm navbar-dark bg-BLACK">
      <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)"><img src="images/83A23CAF-8340-4ED8-81D9-4270837A3DDD.png" alt="logo" id="buisnesslogo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Aboutus.php">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">SIGN UP</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    </nav><br><br><br><br>
<body>
    <div class="container">
      <h2>Welcome to Ibomfoodie</h2><br>
      <h6>  Enter your details to login</h6>
        
      <form action="logincheck.php" method="post">
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
           
         
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">LOGIN</button>
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
    </div>
</body><br><br><br><br><br><br><br><br>

<FOOter class="foot">
      
  <h5 style="color: white;">&copy; 2024 IBOM FOODIE GROUP LLC. <br> All Rights Reserved</h5>

  
</FOOter>


</html>
