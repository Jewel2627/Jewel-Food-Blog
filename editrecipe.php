
<html>
    <body>

        <?php
            include('connection.php');
          
             $RecipeName=$_POST['recipemethod'];
             $sql = "SELECT * FROM recipemethod WHERE recipename='$recipename'";
                    $result = $db->query($sql);

                    if ($result->num_rows > 0) 
                    {
                        $row = $result->fetch_assoc();
                        
                        $chefname=$row["chefname"];
                        $category=$row["category"];
                        $RecipeName=$row["recipename"];
                        $Ingredients=$row["Ingredients"];
                        $Directions=$row["directions"];

                        echo"
                        <html>
                        <body>
                        <form method='post' action='editrecipe.php'>
                            <label>Chef Name:</label>
                            <input type='text' name='chefname' value='$chefname'/><br><br>
                            <label>Category:&nbsp;&nbsp;</label>
                            <input type='text' name='category' value='$category'/> <br><br>
                            <label>Recipe Name:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type='text' name='recipename' value='$recipename'/> <br><br>
                            <label>Ingredients:&nbsp;&nbsp;&nbsp;</label>
                            <textarea name='Ingredients' id='Ingredients' value=''  rows='5' cols='100'>".
                            $row['Ingredients'].
                            "</textarea><br><br>
                            <label>Directions:&nbsp;&nbsp;&nbsp;</label>
                            <textarea name='Directions' id='Directions' value='' rows='10' cols='100'>".
                            $row['Directions'].
                            "</textarea><br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type='submit' name='submit' value='Submit' />
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type='button' value='Reset' />
                        </form>
                        </body></html>";
                    }
                    else 
                    {
                        echo " Not Found";
                    }
                    
             

            $db->close();
            ?>

</body>
</html>