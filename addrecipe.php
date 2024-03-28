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

<head>
	<title>IBOMFOODIE</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
	  .brand{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #cbb09c !important;
  	}
  	form{
  		max-width: 460px;
  		margin: 20px auto;
  		padding: 20px;
  	}
  </style>
</head>
<body class="grey lighten-4">
	<nav class="white z-depth-0">
    <div class="container">
      <a href="images/83A23CAF-8340-4ED8-81D9-4270837A3DDD.png" class="brand-logo brand-text" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">IBOMFOODIE</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="#" class="btn brand z-depth-0">Add a recipe</a></li>
      </ul>
    </div>
  </nav>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<?php include('templates/header.php'); ?>
        
</nav><BR></BR><BR></BR>
	<section class="container grey-text">
		
		<form class="white" action="index.php" method="POST">
			<label>Email</label>
			<input type="text" name="email"><BR></BR>
            <label>Recipe Title</label>
			<input type="text" name="recipetitle"><BR></BR>	
			<label>Ingredients</label>
			<input type="text" name="ingredients"><BR></BR>
            <label>Chef name</label>
			<input type="text" name="chefname"><BR></BR>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>