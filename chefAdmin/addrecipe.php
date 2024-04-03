<?php 
	if(isset($_POST['submit'])){

		$email = $recipetitle = $ingredients = '';
		
		// check email
		if(empty($_POST['email'])){
			echo 'An email is required <br />';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo 'Must be a valid email address';
			}
		}

		// check title
		if(empty($_POST['recipetitle'])){
			echo 'A recipe title is required <br />';
		} else{
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				echo 'Title must be letters and spaces only';
			}
		}

		// check ingredients
		if(empty($_POST['ingredients'])){
			echo 'must enter at least one ingredient <br />';
		} else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				echo 'Ingredients must be a comma separated list';
			}
		}

	} // end POST check

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
</head>
<body>
    <h2>WELCOME TO THE HOME OF AMAZING RECIPES</h2>
    <h4>Add New Recipe</h4>
    <form action="add_recipe.php" method="post" enctype="multipart/form-data">
        <label for="chefName">Chef Name:</label>
        <input type="text" id="chefName" name="chefName" required><br>
        
        <label for="recipeName">Recipe Name:</label>
        <input type="text" id="recipeName" name="recipeName" required><br>
        
        <label for="ingredients">Ingredients:</label><br>
        <textarea id="ingredients" name="ingredients" rows="4" required></textarea><br>
        
        <label for="instructions">Instructions:</label><br>
        <textarea id="instructions" name="instructions" rows="8" required></textarea><br>
        
        <label for="image">Image:</label>
        <input type="file" id="image" name="image"><br>
        
        <label for="video">Video:</label>
        <input type="file" id="video" name="video"><br>
        
        <input type="submit" value="Submit">
    </form>
</body>

<FOOter class="foot">
      
  <h5 style="color: white;">&copy; 2024 IBOM FOODIE GROUP LLC. <br> All Rights Reserved</h5>

  
</FOOter>


</html>



