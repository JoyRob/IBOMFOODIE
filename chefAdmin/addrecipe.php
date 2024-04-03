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
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/thefooter.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="containerr">
        <h2>RECIPE</h2>
        <form action="#">
            <div class="form-group">
                <label for="fullname">Chef Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Recipe Title</label>
                <input type="email" id="email" name="email" required>
            </div>
			<div class="form-group">
                <label for="recipe">Ingredients</label>
                <input type="password" id="recipe" name="recipe" required>
            </div>
            <div class="form-group">
            <label for="recipe">Upload file</label>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submit">
    </form>
            </div>
            <button type="submit">ADD RECIPE</button>
        </form>
    </div>
</body><br>

<FOOter class="foot">
      
  <h5 style="color: white;">&copy; 2024 IBOM FOODIE GROUP LLC. <br> All Rights Reserved</h5>

  
</FOOter>


</html>



