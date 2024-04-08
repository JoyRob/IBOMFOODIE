
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MY AKWAIBOM KITCHEN</title>
    <link rel="stylesheet" href="css/thefooter.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <body class="body">
    <HEAder>
        <header>
            <nav class="navbar border py-0
             navbar-expand-sm navbar-dark bg-BLACK">
                <div class="container-fluid">
                    <a class="navbar-brand" href="javascript:void(0)"><img
                            src="images/83A23CAF-8340-4ED8-81D9-4270837A3DDD.png" alt="logo" id="buisnesslogo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Aboutus.php">ABOUT US</a>
                            </li>
                            <?php
                            session_start();
                            if (isset($_SESSION["user_id"])) {
                                // If user is logged in, show different links
                                echo '
                                <li class="nav-item">
                                    <a class="nav-link" href="Recipelist.php">VIEW RECIPE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">LOGOUT</a>
                                </li>
                                ';
                            } else {
                                // If user is not logged in, show sign up and login links
                                echo '
                                <li class="nav-item">
                                    <a class="nav-link" href="signup.php">SIGN UP</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">LOGIN</a>
                                </li>
                                ';
                            }
                            ?>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="text" placeholder="Search">
                            <button class="btn btn-primary" type="button">Search</button>
                        </form>
                    </div>
                </div>
            </nav>