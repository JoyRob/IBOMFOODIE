<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
<link rel="stylesheet" href="css/login.css">
</head>
<body>
<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="images/83A23CAF-8340-4ED8-81D9-4270837A3DDD.png" alt="Avatar" class="avatar" id="login">
  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
<footer>

</footer>
</html>

