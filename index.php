<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <title>JEWEL FOOD BLOG</title>
  
<div class="section left-section">
    <img src="Images/food logo.jpg" alt="food.jpg" width = "80" height="80"></div> 
    
 
</head>

    <body>
        <h1>WELCOME TO JEWEL FOOD BLOG</h1>
        <P>REGISTER HERE</P>
    <div class="signup box">
        <form action="register.php" method="post"> <label for="SIGN UP"></label>
           
           

        <label for="fullname">Fullname</label><br>
            <input type="text" id="fullname" name="fullname" required><br>

            <label for="username">Username</label><br>
            <input type="text" name="username" placeholder="username" /><br><br>

            <label for="email">Email</label><br>
            <input type="text" name="email" placeholder="email" /><br>

            <label for="password">Password</label><br>
            <input type="password" name="password" placeholder="password" required/> <br>

            <label for="password">Confirm Password</label><br>
            <input type="password" name="confirmpassword" placeholder="confirmpassword"  required/> <br>

           <input type="submit" name="registration" value = "Sign up"/>
            
        </form>

        
            </div> 

       
            <div class="error">
                <?php //echo $error;?> <br>
                <?php //echo $username; echo $password;?>
            </div>
        </div>
    </body>
</html>