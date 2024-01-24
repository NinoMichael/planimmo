<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Planimmo</title>
    <link rel="stylesheet" href="bootstrap/BootCss/bootstrap.css">
    <script src="bootstrap/BootJs/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="views/home.css">
    <style>
        @font-face {
            font-family: 'Mulish';
            src : url(webfonts/Mulish/static/Mulish-Medium.ttf);
        }

        @font-face {
            font-family: 'Kalnia';
            src: url(webfonts/Kalnia/static/Kalnia-Medium.ttf);
        }

        @font-face {
            font-family: 'Lexend';
            src: url(webfonts/Lexend/static/Lexend-Medium.ttf);
        }
    </style>
</head>

<body class = "root-setting">
    <header class="navbar navbar-expand-md d-flex flex-row-reverse d-md-flex flex-md-row">
        <img class="navbar-brand custom-m-logo" src="image/logo.png" alt="Planimmo's logo" width="90px">
        <div class="ms-auto navbar-dark position-relative custom-m-menu">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-content"
                aria-controls="menu-content" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <nav class="p-4 navbar-nav nav-pills justify-content-center collapse-md navbar-md-collapse 
                 custom-position bg-menu"
                id="menu-content">
                <a class="nav-item nav-link text-light active" href="home">Home</a>
                <a class="ms-md-4 nav-item nav-link text-light" href="explore">Explore</a>
                <a class="ms-md-4 nav-item nav-link text-light" href="blog">Blog</a>
                <a class="ms-md-4 nav-item nav-link text-light" href="blog#contactUs">Support</a>
            </nav>

            <div>
                <button id = "register-account" type="button" class = "btn bg-menu2 custom-fs-nav custom-register-position overflow-hidden">Register</button>
            </div>
        </div>
    </header>

     <main class="mb-5 root-glass overflow-hidden d-sm-flex">
          <div class = "p-sm-3">
             <h2 class = "h3 glass-font lead-font">Welcome to PlanImmo, your trusted partner in the realm of real estate !</h2>
             <p class = "mt-2 mt-sm-4">Discover exceptional properties and find the home of your dreams. Explore, choose, live</p>
             <button id = "btn" class = "mt-2 mx-sm-3 custom-m-btn p-3 btn custom-button position-relative overflow-hidden" type="button">Discover now</button>
          </div>

          <img class = "view-mod rounded" src="image/luxury-house.jpg" alt="Photo d'une maison moderne">
     </main>

     <section class="col-12 d-sm-flex">
        <div class="card custom-card ms-card">
            <img class = "card-img-top img-fluid" src="image/explore.jpg" alt="Explore house">
            <div class = "card-body">
                <h4 class = "lead-font">Explore</h4>
                <p class = "card-font">Explore the diverse landscapes of homes and envision the endless possibilities that await.</p>
            </div>
        </div>
        <div class="card custom-card">
            <img class = "card-img-top img-fluid" src="image/choose.jpg" alt="Choose house">
            <div class = "card-body">
                <h4 class = "lead-font">Choose</h4>
                <p class = "card-font">Select from a curated collection of properties. Choose with confidence, as every option reflects excellence.</p>
            </div>
        </div>
        <div class="card custom-card">
            <img class = " card-img-top img-fluid" src="image/live.jpg" alt="Live house">
            <div class = "card-body">
                <h4 class = "lead-font">Live</h4>
                <p class = "card-font">Live in comfort and style, surrounded by the essence of your dreams.</p>
            </div>
        </div>
     </section>

     <footer class = "mt-5 me-4 text-end footer-s text-light d-sm-flex justify-content-sm-between mx-sm-5 mx-custom">
        <p class = "m-0"><a class = "text-light" href="security#privacy">Privacy Policy</a></p>
        <p class = "m-0">© 2023 PlanImmo</p>
        <p class = "m-0">All rights reserved</p>
     </footer>

     <script src="views/home.js"></script>

</body>
</html>