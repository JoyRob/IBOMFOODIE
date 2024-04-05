<?php
// Include db.php for database connection
include 'db.php';

// Query to select all recipes
$sql = "SELECT * FROM recipes";
$result = mysqli_query($db, $sql);

// Check if any recipes are found
if (mysqli_num_rows($result) > 0) {
    // Loop through each recipe
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div id="' . strtolower($row['recipeName']) . '" class="container p-2 my-2 border">';
        echo '<h3>' . $row['recipeName'] . '</h3>';
        echo '<p><strong>Chef:</strong> ' . $row['chefName'] . '</p>';
        // Check if image exists
        if (!empty($row['image'])) {
            echo '<img src="chefAdmin/chefimages/' . $row['image'] . '" alt="' . $row['recipeName'] . '"><br><br>';
        }

        // Check if video exists
        if (!empty($row['video'])) {
            echo '<video width="320" height="240" controls>';
            echo '<source src="chefAdmin/chefvideos/' . $row['video'] . '" type="video/mp4">';
            echo 'Your browser does not support the video tag.';
            echo '</video><br><br>';
        }
        
        echo '<p><h5><strong>Ingredients:</strong></h5><br> ' . $row['ingredients'] . '</p>';
        echo '<p><h5><strong>Instructions:</strong></h5><br> ' . nl2br($row['instructions']) . '</p>';
        echo '</div>';
        

    }
} else {
    echo "No recipes found.";
}

// Close database connection
mysqli_close($db);
?>
