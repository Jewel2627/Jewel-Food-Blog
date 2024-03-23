
<?php
            include('connection.php');

            $recipemethod=$_POST['recipemethod'];
           
            $sql = "DELETE FROM recipemethod WHERE recipename='$recipename'" ;
            $result = $db->query($sql);
            header("Location: home.php");
            $db->close();
        ?>
