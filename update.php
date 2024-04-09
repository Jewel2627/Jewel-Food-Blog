<?php

include('connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $chefname = isset($_POST['chefname']) ? $_POST['chefname'] : '';
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $recipename = isset($_POST['recipename']) ? $_POST['recipename'] : '';
    $ingredients = isset($_POST['ingredients']) ? $_POST['ingredients'] : '';
    $directions = isset($_POST['directions']) ? $_POST['directions'] : '';

    if(empty($recipename)) {
        echo "Recipe Name is empty.<br>";
    }

    if(empty($chefname) && empty($category) && empty($ingredients) && empty($directions)) {
        echo "At least one of the following fields must be filled: Chef Name, Category, Ingredients, Directions.<br>";
    }

    if(empty($recipename) || (empty($chefname) && empty($category) && empty($ingredients) && empty($directions))) {
        echo "All fields are required.";
    } else {
        $sql = "UPDATE recipemethod SET chefname=?, category=?, ingredients=?, directions=? WHERE recipename=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("sssss", $chefname, $category, $ingredients, $directions, $recipename);

        if($stmt->execute())
        {
            echo "Updated Successfully";
            header("Location: home.html");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: editrecipe.html");
        }

        $stmt->close();
    }

} else {
    echo "All fields are required.";
}

$db->close();

?>
