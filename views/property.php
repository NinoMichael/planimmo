<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planimmo - Property</title>
    <link rel="stylesheet" href="bootstrap/BootCss/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/all.css">
    <link rel="stylesheet" href="fontawesome/brands.css">
    <link rel="stylesheet" href="views/property.css">
</head>

<body class = "root-setting">
    <header class = "bg-explore navbar navbar-expand-md d-flex flex-row-reverse d-md-flex flex-md-row">
            <img class="navbar-brand custom-m-logo" src="image/logo.png" alt="Planimmo's logo" width="110px">
            <div class="ms-auto navbar-dark position-relative me-md-5">
                <button class="navbar-toggler m-button" type="button" data-bs-toggle="collapse" data-bs-target="#menu-content"
                    aria-controls="menu-content" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <nav class="bg-menu p-4 navbar-nav nav-pills justify-content-center collapse-md navbar-md-collapse custom-position" id = "menu-content">
                <a class="nav-item nav-link text-dark text-md-white" href="home">Accueil</a>
                <a class="ms-md-4 nav-item nav-link text-light active" href="explore">Explore</a>
                <a class="ms-md-4 nav-item nav-link text-dark text-md-white" href="blog">Blog</a>
                <a class="ms-md-4 nav-item nav-link text-dark text-md-white" href="blog#contactUs">Support</a>
                </nav>

        <p class = "custom-p-menu position-absolute text-light">Explore, Choose, Live...</p>
    </header>

    <main>
        <div class="prop-position">
            <div class="d-flex flex-row margin-prop justify-content-between">
                <a href="explore"><i class = "fa fa-chevron-left text-light back"></i></a>
                <h1 class = "title-lead text-light mt-2">Middle house</h1>
                <p class = "price-lead text-light mt-2">$20 000</p>
            </div>
            <div>
                <img class = "margin-img img-fluid img-thumbnail" src="image/middle-house" alt="Picture of estate">
            </div>
        </div>
    </main>

    <script src="bootstrap/BootJs/bootstrap.bundle.js"></script>
    <script src="views/property.js"></script>
    
</body>
</html>
