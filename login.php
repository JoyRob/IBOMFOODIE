<?php
session_start();
include("db.php");
include("logincheck.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = $_POST['password'];

        $query = "SELECT * FROM register WHERE email = ? LIMIT 1";
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if (password_verify($password, $user_data['password'])) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                exit();
            }
        }
    }
    echo "Wrong username or password!";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="email"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.html">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>