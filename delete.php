<?php
    include('connection.php');

       if ($_SERVER["REQUEST_METHOD"] == "POST") 
       {
     
        $recipename = $_POST['recipename']; 

        $stmt = $db->prepare("DELETE FROM recipemethod WHERE recipename = ?");
        $stmt->bind_param("s", $recipename);
        
        if ($stmt->execute()) {
            header("Location: home.php");
        } else {
            echo "Error deleting record: " . $stmt->error;
        }
        $stmt->close();
        
        $db->close();
    }
?>
