
<html>
    <body>

        <?php
            include('connection.php');
          
             $chefname=$_GET['chefname'];
             $category=$_GET['category'];
             $cuisine=$_GET['cuisine'];
             $location=$_GET['location'];

            
                    $sql = "SELECT * FROM recipename WHERE chefname='$chefname' or category='$category' or cuisine='$cuisine' or location='$location'" ;
                    $result = $db->query($sql);

                    if ($result->num_rows > 0) 
                    {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                           
                            echo "<br> Chef Name: ". $row["chefname"]. " - Category: ". $row["category"]. " - Cuisine: ". $row["cuisine"]. " - Location: " . $row["location"] . "<br>";
                        }
                    }
                    else 
                    {
                        echo "0 results";
                    }
                    echo "Results displayed";
             

            $db->close();
            ?>

</body>
</html>