<html>
<body>

    <?php
        include('connection.php');
      
        if(isset($_POST['recipename'])) {
            $recipename = $_POST['recipename'];

            // Prepare and execute SQL query
            $stmt = $db->prepare("SELECT * FROM recipemethod WHERE recipename = ?");
            $stmt->bind_param("s", $recipename);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $chefname = $row["chefname"];
                $category = $row["category"];
                $recipename = $row["recipename"];
                $ingredients = $row["ingredients"];
                $directions = $row["directions"];

                echo "
                <form method='post' action='update.php'>
                    <label>Chef Name:</label>
                    <input type='text' name='chefname' value='$chefname'/><br>
                    <label>Category:&nbsp;&nbsp;</label>
                    <input type='text' name='category' value='$category'/> <br><br>
                    <label>Recipe Name:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type='text' name='recipename' value='$recipename'/> <br>
                    <label>Ingredients:&nbsp;&nbsp;&nbsp;</label>
                    <textarea name='ingredients' id='ingredients' rows='5' cols='100'>$ingredients</textarea><br><br>
                    <label>Directions:&nbsp;&nbsp;&nbsp;</label>
                    <textarea name='directions' id='directions' rows='10' cols='100'>$directions</textarea><br><br>
                    <input type='submit' name='submit' value='Submit' />
                    <input type='reset' value='Reset'/>
                </form>";
            } else {
                echo "Not Found";
            }

            $stmt->close();
        } else {
            echo "Recipe Name not provided";
        }

        $db->close();
    ?>

</body>
</html>
