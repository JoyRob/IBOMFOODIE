<?php

include 'db.php';

// Check if the form is submitted
if(isset($_POST['submit'])){
    // Prepare and bind SQL statement
    $stmt = $db->prepare("INSERT INTO recipes (chefName, recipeName, ingredients, instructions, image, video) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $chefName, $recipeName, $ingredients, $instructions, $image, $video);

    // Set parameters and execute
    $chefName = $_POST['chefName'];
    $recipeName = $_POST['recipeName'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];

    // Check if image file is uploaded
    if($_FILES['image']['name']) {
        if ($_FILES['image']['size'] > 20 * 1024 * 1024) {
            $errorMessage = 'The image file size exceeds the maximum allowed size of 20MB.';
        } else {
            $image = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], 'chefimages/' . $image);
        }
    } else {
        $image = "";
    }

    // Check if video file is uploaded
    if($_FILES['video']['name']) {
        if ($_FILES['video']['size'] > 20 * 1024 * 1024) {
            $errorMessage = 'The video file size exceeds the maximum allowed size of 20MB.';
        } else {
            $video = $_FILES['video']['name'];
            move_uploaded_file($_FILES['video']['tmp_name'], 'chefvideos/' . $video);
        }
    } else {
        $video = "";
    }

    // Execute SQL statement if no error message
    if (!isset($errorMessage)) {
        if ($stmt->execute()) {
            $successMessage = "New recipe added successfully!";
        } else {
            $errorMessage = "Error: " . $stmt->error;
        }
    }

    // Close statement
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD RECIPE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/thefooter.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h2 {
            color: #ffcc00;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="file"] {
            border: none;
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;

        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #ffcc00;
            color: #000;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #ffdb4d;
        }
    </style>
    <h2>WELCOME TO THE HOME OF AMAZING RECIPES</h2>
    <h4>Add New Recipe</h4>
    <?php if (isset($errorMessage)): ?>
        <p style="color: red;"><?php echo $errorMessage; ?></p>
    <?php elseif (isset($successMessage)): ?>
        <p style="color: green;"><?php echo $successMessage; ?></p>
    <?php endif; ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="chefName">Chef Name:</label>
        <input type="text" id="chefName" name="chefName" required><br>
        
        <label for="recipeName">Recipe Name:</label>
        <input type="text" id="recipeName" name="recipeName" required><br>
        
        <label for="ingredients">Ingredients:</label><br>
        <textarea id="ingredients" name="ingredients" rows="4" required></textarea><br>
        
        <label for="instructions">Instructions:</label><br>
        <textarea id="instructions" name="instructions" rows="8" required></textarea><br>
        
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*"><br>
        
        <label for="video">Video:</label>
        <input type="file" id="video" name="video" accept="video/*"><br>
        
        <input type="submit" name="submit" value="Submit">

    </form>
</body>

<FOOter class="foot">
      
  <h5 style="color: white;">&copy; 2024 IBOM FOODIE GROUP LLC. <br> All Rights Reserved</h5>

  
</FOOter>


</html>
