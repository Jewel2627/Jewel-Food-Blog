<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <title>JEWEL FOOD BLOG</title>
  
<div class="section left-section">
    <img src="Images/food logo.jpg" alt="food.jpg" width = "80" height="80"></div> 
    
    <nav>
        <a href="home.html">HOME</a>
        <a href="recipeindex.html">RECIPE</a>
        <a href="about.html">ABOUT</a>
        <a href="index2.php">LOGIN </a>
        <a href="index3.php">ADD RECIPE</a>
        <a href="index4.php">EDIT HERE</a>
     </nav> 
</head>
<body>
    
<p> login as Chef/Admin</p>
<form action="loginchef2.php" method="post"> 
    <div class="signin"></div>
    <label for="username">Username</label><br>
            <input type="text" name="username" placeholder="username" /><br><br>
            
    <label for="password">Password</label><br>
     <input type="password" name="password" placeholder="password" required/> <br>

     <input type="submit" name="submit" value = "Sign in"/>
</form>

<?php //echo $error;?> <br>
                <?php //echo $username; echo $password;?>
</body>
</html>