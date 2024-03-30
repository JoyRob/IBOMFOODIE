<?php
session_start();

include ('db.php');
 $firstname=$_POST['first_name'];
 $lastname=$_POST['last_name'];
 $email=$_POST['email'];
 $gender=$_POST['gender'];
 $password=$_POST['password'];
 $confirmpassword=$_POST['confirmpassword'];

    if($password !== $confirmpassword)
    {
       echo "password and confirm password are not same";
    }
       
    else
    {   
        $sql = "INSERT INTO register (firstname,lastname,email,gender,password) VALUES ('$firstname','$lastname','$email','$gender','$password')";
        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo "Registered Successfully";
            header("Location: index.php");
        }
        else
        {
            echo "Something Went Wrong!";
        }
    }
   
?>

