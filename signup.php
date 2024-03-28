<?php
session_start();

include('connect.php');
 $firstname=$_POST['first_name'];
 $lastname=$_POST['last_name'];
 $email=$_POST['email'];
 $dateofbirth=$_POST['date_of_birth'];
 $gender=$_POST['gender'];
 $password=$_POST['password'];
 $confirmpassword=$_POST['confirmpassword'];

    if($password !== $confirmpassword)
    {
       echo "password and confirm password are not same";
    }
       
    else
    {   
        $sql = "INSERT INTO ibomusers (FIRSTNAME,LASTNAME,EMAIL,GENDER,DATEOFBIRTH,PASSWORD) VALUES ('$firstname','$lastname','$email','$gender','$dateofbirth','$password')";
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

