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

  <title>sign up</title>
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
              <a class="nav-link" href="login.php">LOGIN</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    </nav><br><br><br>
<body>
    <div class="container">
      <h2>Welcome to Ibomfoodie</h2><br>
        
      <form action="signupcheck.php" method="post">
            <div class="form-group">
              <h6>Please enter your details</h6>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div><br>
            <div class="form-group">
            <label for="gender">Gender:</label>
                <select id="text" name="gender" id="gender">
                  <option value="man" >Man</option>
                  <option value="woman" >Woman</option>
                  <option value="transgender man" >Transgender Man</option>
                  <option value="transgender woman">Transgender Woman</option>
                  <option value="Non-binary" >Non-binary</option>
                  <option value="Agender" >Agender</option>
                  <option value="gender not listed" >Gender Not Listed</option>
                  <option value="prefer not to say" >Prefer Not to Say</option>
                </select>
            </div>
         
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" id="confirmpassword" name="confirmpassword" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body><br>

<FOOter class="foot">
      
  <h5 style="color: white;">&copy; 2024 IBOM FOODIE GROUP LLC. <br> All Rights Reserved</h5>

  
</FOOter>


</html>
