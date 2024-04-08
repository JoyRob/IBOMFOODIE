
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
                                    <a class="nav-link" href="addrecipe.php">ADD RECIPE</a>
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
                       
                    </div>
                </div>
            </nav>
        </header>

  </HEAder>
  <Main class="main">
    <section>

      <main>

      </header>
    <div class="hero text-center text-white p-5"><br>
      <h1 class="HEADER mt-4 p-5 text-blue "> WELCOME TO IBOM FOODIE</h1>
      <h3>Learn to cook our local dishes from the best chefs in the game</h3>

      <iframe title="vimeo-player" src="https://player.vimeo.com/video/923134324?h=232b407a33" width="640" height="360" frameborder="0" allowfullscreen class="container text-center"></iframe>
      <p>Our famous Nigerian Pepper stew</p>
      <br>
    
    </div>
    <br>
    <br>
  <!-- <header begins here"> -->
  </HEAder>
  <Main class="main">
    <section>

      <main>

        <SECtion>
          <h3 class="text-center"> LEARN THE BEST AKWA IBOM RECIPES FROM THE BEST CHEFS IN NIGERIA</h3>
          <P style="text-align: center;">Does the idea of cooking local dishes excite you? <br> Do you love cooking and want to explore popular Akwa ibom dishes and ingredients? <br>Discover a wide range of local recipes that have been carefully curated by top chefs from diverse culinary backgrounds. <br> Whether you're looking for an everyday meal to enjoy with family, something to serve guests at family events, recipes to serve your big day or indulgent tasty delights, you'll find something to inspire your next dish on our website. With IbomFoodies, you can discover new flavours, learn a wide range of cooking techniques, and elevate your culinary skills.
            Our chefs are higly qualified professionals in the culinary proffesionals trained from high-end culinary institutes around the world. <br> </P>
          <br>

          <h3 style="text-align: center;">MEET OUR WORLD-CLASS CHEFS</h3> <br>
          <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <h4> CHEF T</h4>
                <p>Chef T is an extraordinary culinary chef and has received recognition from Italian culinary institutes. You can access her amazing recipes by creating an account and logging in to learn more </p>
                <img src="images/chefT.jpg" alt="chef Hilda" class="img-fluid ">
                <p>one of her best recipes is the Nigerian stew</p>
              </div>
              <div class="col">
                <h4>CHEF HILDA</H4>
                <img src="images/chefhilda.jpg" alt="Mountains" class="img-fluid">
                <p>Chef Hilda is our Top chef, restaurant owner, and former holder of the Guinness World Record for marathon cooking (cook-athon). She is known for her best-selling recipe for the famous "Afang soup"
                </p>
              </div>
              <div class="col">
                <h4> CHEF TUNDE</h4>
                <p>Chef Tunde is an extraordinary culinary master and is popular for his ekpang-nkukwo recipe. You can access his amazing recipes by creating an account and logging in to learn more </p>
                <img src="images/cheftunde.jpg" alt="cheft" class="img-fluid">
                <p>This cheese is really good if you are looking to hide livestock</p>
              </div>
        </SECtion>
        <section><br>
          <p>Welcome to ibomfoodie, your ultimate destination for exploring the rich and diverse culinary traditions of Akwa Ibom! <br>
            Discover the vibrant flavors, unique ingredients, and cultural heritage of Akwa Ibom cuisine right here.</p>
          <h2 class="text-center"> SOME OF OUR BEST SELLING RECIPES</h2>
          <br>
          <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <h3> AFANG SOUP</h3>
                <img src="images/afang.jpg" alt="chef Hilda" class="img-fluid ">
                <p>Our Most sort after recipe</p>
              </div>
              <div class="col">
                <h3> JOLLOF RICE</h3>
                <img src="images/jollof.jpeg" alt="cheft" class="img-fluid">
                <p> A Party stopper</p>
              </div>
              <div class="col">
                <h3>EDIKA EKONG</H3>
                <img src="images/EDIKAEKONG.jpg" alt="Mountains" class="img-fluid">
                <p>For Special occasions</p>
              </div>
        </section>
        <br>
      </main>

      <p>Explore Our Featured Recipes:
        Afang Soup: A savory delicacy bursting with flavors of local herbs and spices. <br>
        Edikang Ikong: A hearty vegetable soup that's a staple in Akwa Ibom households.
        Atama Soup: Indulge in the rich flavors of palm nut and seafood in this traditional dish. <br>
        Browse through our curated collection of authentic Akwa Ibom recipes and start your culinary adventure today!</p>

      <aside>
        <article>
          <h3 class="container text-center">Create an Account to access an endless list of recipes</h3>
          <P>Find Your Favorite Recipes:
            Search by Category: Breakfast, Lunch, Dinner, Appetizers, Desserts, and more.
            Discover New Flavors: Browse recipes by ingredients, cuisine type, or cooking difficulty.
            Looking for something specific? Use our search bar to find the perfect recipe for any occasion.</P><br>
          <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <h3> STEW</h3>
                <img src="images/stew.jpg" alt="stew" class="img-fluid ">
                <p>Made from the finest local spices and ingredients. our chefs have worked tiredlessly to bring you the very best ingredients ann meals.</p>
              </div>
              <div class="col">
                <h3> AKARA AND AKAMU</h3>
                <img src="images/akara.jpg" alt="AKARA" class="img-fluid">
                <p>register to access detail recipe</p>
              </div>
              <div class="col">
                <h3>ISI EWU</H3>
                <img src="images/isiewu.jpg" alt="goatmeat" class="img-fluid">
                <p>Made from the finest local spices and ingredients. our chefs have worked tiredlessly to bring you the very best ingredients ann meals.</p>
              </div>
        </article>
        <article>
          <h3 class="container text-center">Join the ibomfoodie Community:</h3>
          <li class="nav-item"><a class="nav-link" href="feedbackform.html">CLICK HERE</a>
          </li>
          <p>
            Share your thoughts and experiences by leaving comments and reviews on your favorite recipes. <br>
            Connect with fellow food enthusiasts, share cooking tips, and celebrate the flavors of Akwa Ibom together <br>
            Have a recipe to share? Submit your own creations and become part of our growing community of home cooks and chefs.</P>
        </article>
      </aside>

      <h4>Connect with Us</h4>
      <p>Follow us on Facebook, Instagram, and Twitter for daily inspiration, behind-the-scenes content, and community updates. <br>
        Share your favorite recipes, tag us in your culinary creations, and join the conversation on social media
  </Main><br><br></p>
  <FOOter class="foot">

    <ul class="social-media-links">
        <li>
            <a href="https://www.instagram.com/your_username">
                <img src="images/instagram.png" alt="Instagram">
            </a>
        </li>
        <li>
            <a href="https://www.tiktok.com/@your_username">
                <img src="images/tiktok.png" alt="TikTok">
            </a>
        </li>
        <li>
            <a href="https://www.youtube.com/channel/your_channel_id">
                <img src="images/youtube.png" alt="YouTube">
            </a>
        </li>
        <li>
            <a href="https://www.facebook.com/your_page">
                <img src="images/facebook.png" alt="Facebook">
            </a>
        </li>
        <li>
            <a href="https://twitter.com/your_username">
                <img src="images/twitter.png" alt="Twitter">
            </a>
        </li>
    </ul>




    <p>
      <a href="#">FAQ</a>
      <a href="#">Safety tips</a>
      <a href="termsandconditions.html">Terms and condition</a>
      <a href="cookiepolicy.html">Cookie Policy</a>
      <a href="Privacypolicy.html">Privacy Policy</a>
    </p>

    <h5 style="color: white;">&copy; 2024 IBOM FOODIE GROUP LLC. <br> All Rights Reserved</h5>

    
  </FOOter>
</body>

</html>