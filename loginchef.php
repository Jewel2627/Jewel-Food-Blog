<?php
include("connection.php"); //Establishing connection with our database
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo "Both fields are required.";
    }
    else
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT * FROM registration WHERE username='$username' and password='$password'";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result) == 1)
        {
            header("location: addrecipe.html"); // Redirecting To another Page
        }
        else
        {
            echo "Incorrect username or password.";
        }
    }
?>
 