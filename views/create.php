<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planimmo - Create an account</title>
    <link rel="stylesheet" href="bootstrap/BootCss/bootstrap.css">
    <script defer src="bootstrap/BootJs/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="fontawesome/all.css">
    <script defer src="views/create.js"></script>
    <link rel="stylesheet" href="views/create.css">
</head>
<body class = "root-setting">
    <main class = "row">
        <div class = "mt-4 mb-md-5 ms-md-2 ms-xl-5 col-12">
            <p class = "back-font"><a href="blog" class = "text-light text-decoration-none"><i class="fa fa-chevron-left ms-3 me-2"></i>Back</a></p>
        </div>

        <div id = "indicator" class=" col-12 col-md-7 carousel slide root-container" data-bs-ride = "carousel">
            <div class="carousel-indicators margin-indicator">
                <button type="button" data-bs-target = "indicator" data-bs-slide-to= "0" class = "active" aria-current = "true" aria-slide = "Slide 1"></button>
                <button type="button" data-bs-target = "indicator" data-bs-slide-to= "1"></button>
                <button type="button" data-bs-target = "indicator" data-bs-slide-to= "2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active carousel-setting">
                   <img class = "img-margin" src="image/explore.jpg" alt="">
                   <div class="mt-0 intro-margin text-center">
                       <h5 class="title-lead text-light mt-2 mt-lg-3 mb-0">Exclusive access</h5>
                       <p class = "carousel-font text-light mt-0 mt-lg-2">Discover our exclusive real estate offerings instantly with real account</p>
                   </div>
                </div>
                <div class="carousel-item carousel-setting">
                    <img class = "img-margin" src="image/choose.jpg" alt="">
                    <div class="mt-0 intro-margin text-center">
                        <h5 class="title-lead text-light mt-2 mt-lg-3 mb-0">Tailored real estate</h5>
                        <p class = "carousel-font text-light mt-0 mt-lg-2">Shape your real estate experience according to your unique preferences</p>
                    </div>
                 </div>
                 <div class="carousel-item carousel-setting">
                    <img class = "img-margin" src="image/alert.jpg" alt="">
                    <div class="mt-0 intro-margin text-center">
                        <h5 class="title-lead text-light mt-2 mt-lg-3 mb-0">Customized alert</h5>
                        <p class = "carousel-font text-light mt-0  mt-lg-2">Receive notifications tailored to your real estate criteria & news</p>
                    </div>
                 </div>
            </div>
        </div>

        <div class = "d-none d-md-block col-md-4 mt-md-3 ms-md-4 ms-xl-0">
            <h3 class = "h5 text-light text-md-center fw-bolder ms-md-3 mt-md-4 ms-xl-4"><i class = "fa fa-user me-md-3"></i>Create an account</h3>
            <p class = "text-light lead-font text-md-center">Sign up now to unlock exclusive real estate opportunities. Your future begins here.</p>
        </div>

        <div class = "col-12">
            <button id = "btn-register" class = "btn fs-6 px-4 py-1 px-md-5 py-md-2 py-xl-3 text-light bg-gray custom-btn-m position-relative overflow-hidden" type="button">Sign up</button>
            <p class="back-font text-light text-center margin-login">Have already an account ? <a href="views/signin" class = "text-light">Sign in</a></p>
        </div>
      
    </main>
</body>
</html>