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
  <?php include('components/header.php'); ?>


