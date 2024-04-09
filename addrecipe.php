<?php

include('connection.php');

$chefname = isset($_POST['chefname']) ? $_POST['chefname'] : '';
$category = isset($_POST['category']) ? $_POST['category'] : '';
$recipename = isset($_POST['recipename']) ? $_POST['recipename'] : '';
$ingredients = isset($_POST['ingredients']) ? $_POST['ingredients'] : '';
$directions = isset($_POST['directions']) ? $_POST['directions'] : '';

$file_name = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(empty($chefname)) {
        echo "Chef Name is empty.<br>";
    }

    if(empty($category)) {
        echo "Category is empty.<br>";
    }

    if(empty($recipename)) {
        echo "Recipe Name is empty.<br>";
    }

    if(empty($ingredients)) {
        echo "Ingredients are empty.<br>";
    }

    if(empty($directions)) {
        echo "Directions are empty.<br>";
    }

    if(isset($_FILES["file"]) && $_FILES["file"]["tmp_name"] != "") {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["file"]["tmp_name"]);

        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image or video.<br>";
            $uploadOk = 0;
        }

        if ($_FILES["file"]["size"] > 10000000) {  // 10MB limit
            echo "Sorry, your file is too large.<br>";
            $uploadOk = 0;
        }

        $allowed_formats = array("jpg", "jpeg", "png", "mp4", "avi", "mov", "wmv");
        if(!in_array($imageFileType, $allowed_formats)) {
            echo "Sorry, only JPG, JPEG, PNG, MP4, AVI, MOV, and WMV files are allowed.<br>";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.<br>";
                $file_name = basename($_FILES["file"]["name"]);
            } else {
                echo "Sorry, there was an error uploading your file.<br>";
            }
        } else {
            echo "Sorry, your file was not uploaded.<br>";
        }
    } else {
        echo "No file uploaded.<br>";
    }

    if(empty($chefname) || empty($category) || empty($recipename) || empty($ingredients) || empty($directions) || empty($file_name)) {
        echo "All fields are required.";
    } else {
        $sql = "INSERT INTO recipemethod (chefname, category, recipename, ingredients, directions, file_name) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ssssss", $chefname, $category, $recipename, $ingredients, $directions, $file_name);

        if($stmt->execute()) {
            echo "Successfully";
            header("Location: home.php");
        } else {
            echo "Something Went Wrong!";
            header("Location: addrecipe.html");
        }

        $stmt->close();
    }
}

$db->close();

?>
