<?php

include('connection.php');

if (isset($_POST['registration'])) {


 $fullname=$_POST['fullname'];
 $email=$_POST['email'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $confirmpassword=$_POST['confirmpassword'];

    if ($password !== $confirmpassword) 
    {
        echo "password and confirm password are not same";
    }

    else
    {

        $sql = "INSERT INTO registration (fullname,email,username,password) VALUES ('$fullname','$email','$username','$password')";
        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo "Registered Successfully";
            header("Location: index2.php");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: register.html");
        }

    }

}

    mysqli_close($db);



   
?>