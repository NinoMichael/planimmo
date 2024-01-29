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
                <h1 class = "title-lead text-light mt-1 mt-sm-0">Middle house</h1>
                <p class = "price-lead text-light mt-2 mt-sm-1">$20 000</p>
            </div>
            <div class = "carousel slide" data-bs-ride = "carousel">
                <div class="carousel-inner margin-img">
                    <div class="carousel-item active" data-bs-interval = "7000">
                        <img class = "img-thumbnail custom-img" src="image/middle-house.jpg" alt="Picture of estate">
                    </div>
                    <div class="carousel-item" data-bs-interval = "7000">
                        <img class = "img-thumbnail" src="image/garden.png" alt="Picture of estate">
                    </div>
                    <div class="carousel-item" data-bs-interval = "7000">
                        <img class = "img-thumbnail" src="image/kitchen.png" alt="Picture of estate">
                    </div>
                    <div class="carousel-item" data-bs-interval = "7000">
                        <img class = "img-thumbnail" src="image/living-room.png" alt="Picture of estate">
                    </div>
                    <div class="carousel-item" data-bs-interval = "7000">
                        <img class = "img-thumbnail" src="image/garage.png" alt="Picture of estate">
                    </div>
                </div>
            </div>
        </div>

        <div class = "d-flex custom-expand">
            <div class = "panel active" style = "background-image : url(image/middle-house.jpg);" ></div>
            <div class = "panel" style = "background-image : url(image/garden.png);" ></div>
            <div class = "panel" style = "background-image : url(image/kitchen.png);" ></div>
            <div class = "panel" style = "background-image : url(image/living-room.png);" ></div>
            <div class = "panel" style = "background-image : url(image/garage.png);" ></div>
        </div>

        <div class = "custom-feature bg-light d-flex justify-content-between">
            <div class = "p-feature row col-9 mt-1 ms-2">
                <p class = "col-3"><i class="fa fa-hotel me-2"></i>6 rooms</p>
                <p class = "col-3"><i class="fa fa-bed me-2"></i>3 beds</p>
                <p class = "col-3"><i class="fa fa-car me-2"></i>Garage</p>
                <p class = "col-3"><i class="fa fa-leaf me-2"></i>Garden</p>
            </div>
            <div>
                <a href="" class="btn bg-gray text-light btn-feature rounded mt-1 me-3">Buy</a>
            </div>
        </div>

        <div class = "col-12 d-flex flex-row">
            <div class = "profile-m">
                <img class= "img-fluid img-profile" src="image/todisoa.jpg" alt="">
            </div>
            <div class = "ms-3 mt-4">
                <p class = "fw-bolder text-light fs-6">Tiavina Todisoa</p>
                <p class = "text-light p-date">02 Mars 2024</p>
            </div>
        </div>

        <div class = "d-md-flex flex-md-row">
            <article class = "intro">
                <p class= "text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quaerat beatae tempore eum 
                    facere, cum praesentium consectetur animi laudantium. Nam illum nobis sunt quidem repellendus laborum, autem, reprehenderit corporis eum quae perferendis a consectetur!
                    Unde maxime, odio asperiores cupiditate optio molestias, consequatur cumque veritatis in enim dicta ab numquam ad?
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo laboriosam dolor, aspernatur fuga accusantium cum doloremque deleniti, reiciendis ducimus adipisci nobis optio eligendi saepe aut, qui natus eius modi corporis dolores! Aut, accusantium dolore. Voluptas soluta cupiditate magni repellat quos.</p>
            </article>
            <div>
                <h3 class = "d-block d-md-none h6 fw-bolder text-light title-map">Location on map</h3>
                <div></div>
            </div>
        </div>
    </main>

    <script src="bootstrap/BootJs/bootstrap.bundle.js"></script>
    <script src="views/property.js"></script>
    
</body>
</html>
