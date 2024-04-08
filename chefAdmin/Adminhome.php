<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBOMFOODIE Admin Panel</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to your Dashboard</h1><br>
        <div class="menu">
            <ul>
                <li><a href="index.php" id="dashboard-link">Home</a></li><br>
                <li><a href="managerecipe.html" id="profile-link">Manage recipe</a></li><br>
                <li><a href="addrecipe.php" id="add-recipe-link">Add Recipe</a></li><br>
                <li><a href="home.php">Logout</a></li>
            </ul>
        </div>
        <div class="content" id="Dashboard">
            <?php include 'Dashboard.php'; ?>
        </div>
        <div class="content" id="home">
            <?php include 'Dashboard.php'; ?>
        </div>
        <div class="content" id="Manageprofile">
            <?php include 'manageprofile.php'; ?>
        </div>
        <div class="content" id="add-recipe">
            <?php include 'addrecipe.php'; ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>





</body>

</html>
</html>
