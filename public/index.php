<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>

    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" href="resources/icons/css/font-awesome.min.css">
</head>


<body>
    <header>
        <div class="header">
            <div class="nav-brand">
                FOOD NG
            </div>

            <div class="nav-items">
                <nav class="nav-links">
                    <a class="nav-link active" href=""><i class="fa fa-home" aria-hidden="true"></i>Home </a>
                    <a href=""><i class="fa fa-book" aria-hidden="true"></i>Menu</a>
                    <a href=""><i class="fa fa-phone" aria-hidden="true"></i>Contact</a>
                    <a href=""><i class="fa fa-info" aria-hidden="true"></i>About Us</a>
                </nav>
                <button class="btn-order">Order Now
                    <i class="fa fa-cart-plus cart" aria-hidden="true"></i>
                </button>
                <i onclick="openMenu()" class="fa fa-bars icon fa-lg" aria-labelledby="button"></i>
            </div>
        </div>
    </header>

    <main class="container">
        <section>
            <h3>You Are Welcome To Food NG</h3>
        </section>
        <div class="slideshow">
            <img class="slide" src="resources/pictures/amala.jpg">
            <img class="slide" src="resources/pictures/egusi-soup-recipe.jpg">
            <img class="slide" src="resources/pictures/fried-rice.jpg">
            <img class="slide" src="resources/pictures/bread-akara.jpg">
        </div>
    </main>


    <script src="resources/js/main.js"></script>

</body>

</html>