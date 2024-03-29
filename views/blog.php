<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planimmo - Blog</title>
    <link rel="stylesheet" href="bootstrap/BootCss/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/all.css">
    <link rel="stylesheet" href="fontawesome/brands.css">
    <link rel="stylesheet" href="views/blog.css">
</head>

<body class = "root-setting">
    <header id = "header-setting" class="header-setting">
      <div class="d-flex flex-row">
      <div class = "navbar navbar-expand-md d-flex flex-row-reverse d-md-flex flex-md-row">
        <img class="navbar-brand custom-m-logo" src="image/logo.png" alt="Planimmo's logo" width="120px">
        <div class="ms-auto navbar-dark position-relative custom-m-menu">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-content"
                aria-controls="menu-content" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                <nav class="p-4 navbar-nav nav-pills justify-content-center collapse-md navbar-md-collapse 
                custom-position bg-menu1"
                id="menu-content">
                   <a class="nav-item custom-fs-nav nav-link text-light" href="home">Home</a>
                   <a class="ms-md-4 custom-fs-nav nav-item nav-link text-light" href="explore">Explore</a>
                   <a class="ms-md-4 custom-fs-nav nav-item nav-link text-light active" href="blog">Blog</a>
                   <a class="ms-md-4 custom-fs-nav nav-item nav-link text-light" href="blog#contactUs">Support</a>
                </nav>

         </div>
         <div>
            <button id = "register" type="button" class = "btn bg-menu2 custom-fs-nav custom-register-position overflow-hidden">Register</button>
        </div>
        </div>
       </div>

       <div class = "position-relative mx-3 d-block d-sm-none">
        <img class = "custom-img-header rounded" src="image/blog-header-house.jpg" alt="Photo of modern building">
        <div class="custom-lead-pos px-5">
           <p class = "h3 title-lead text-light">Discover extraordinary real Estate with Planimmo</p>
           <p class = "p3-fs-6 text-light">We're more than just a real estate agency, we're your partner in finding the perfect estate place. Our commitment to excellence and unwavering dedication to your dreams set us apart</p>
           <button id = "btn1" class = "btn bg-light fs-6" type="button">Discover now</button>
        </div>
       </div>

       <div class = "d-none d-sm-block d-sm-flex flex-sm-row shadow-glass">
        <div class="col-sm-5">
          <p class = "h3 title-lead text-gray">Discover extraordinary real Estate with Planimmo</p>
          <p class = "p3-fs-6">We're more than just a real estate agency, we're your partner in finding the perfect estate place. Our commitment to excellence and unwavering dedication to your dreams set us apart</p>
          <button id = "btn2" class = "btn bg-gray fs-6 text-light p-lg-3 mt-xl-4 position-relative overflow-hidden" type="button">Discover now</button>
        </div>
        <div class="col-sm-6 col-lg-7">
            <img class = "img-fluid rounded ms-sm-4 mt-sm-4 ms-md-5 h-75" src="image/header-house.png" alt="Photo of modern building">
        </div>
       </div>

       <div class="d-flex flex-row justify-content-center justify-content-lg-around my-3 px-5">
            <div class = "me-5 me-xl-0">
                <p class="h6 text-light fw-bolder">+5K</p>
                <p class = " p3-fs-6 mt-9 text-light">deals</p>
            </div>
            <div class = "me-5 me-xl-0">
                <p class="h6 text-light fw-bolder">+5K</p>
                <p class = "p3-fs-6 mt-9 text-light">users</p>
            </div>
            <div class = "me-5 me-xl-0">
                <p class="h6 text-light fw-bolder">+50</p>
                <p class = "p3-fs-6 mt-9 text-light">agents</p>
            </div>
       </div>
    </header>

    <main>
        <div class = "mt-4 mt-md-5 px-xl-5">
            <h3 class = "custom-t-partner text-center">Our home partners</h3>
            <div class="d-flex flex-row justify-content-center justify-content-xl-around">
                <a href="https://www.facebook.com/BMOI.Groupe.BCP"><img class = "img-fluid custom-logo-brand mx-2 mx-sm-3 mx-md-5" src="image/bmoi.jpg" alt="Logo of BMOI"></a>
                <a href="https://www.facebook.com/BatimaxMdg"><img class = "img-fluid custom-logo-brand mx-2 mx-sm-3 mx-md-5" src="image/batimax.jpg" alt="Logo of Batimax"></a>
                <a href="https://www.facebook.com/screm.mada"><img class = "img-fluid custom-logo-brand mx-2 mx-sm-3 mx-md-5" src="image/screm.jpg" alt="Logo of SCREM"></a>
                <a href="https://www.facebook.com/kanelleimmo"><img class = "img-fluid custom-logo-brand mx-2 mx-sm-3 mx-md-5" src="image/kanelle-immo.jpg" alt="Logo of Kanelle Immo"></a>
            </div>
        </div>

        <div class="mt-5">
            <h3 class = "custom-t-partner text-center">Why choose us ?</h3>
            <p class = "custom-p-choose">Choosing Planimmo means choosing a real estate partner dedicated to your unique journey. We stand out in the industry because we offer more than just property things.</p>
            <div class="col-12 row ms-4 ms-sm-0 justify-content-sm-center g-3 g-sm-4 mt-3">
                <div class="card bg-gray text-light col-5 col-sm-4 col-md-2 shadow-lg p-0 me-md-3 me-xl-4">
                   <img class = "card-img-top img-fluid" src="image/guidance.jpg" alt="Picture of estate guidance">
                   <h4 class = "h6 mt-3 title-choose text-center">Expert guidance</h4>
                   <p class = "custom-p-reason px-3">We guide you with precision, helping you make informed decisions, with our in-depth knowledge of the market</p>
                </div>
                <div class="card bg-gray text-light col-5 col-sm-4 col-md-2 shadow-lg ms-2 ms-md-0 p-0 ms-sm-5 me-md-3 me-xl-4">
                    <img class = "card-img-top img-fluid" src="image/custom.jpg" alt="Picture of custom service">
                    <h4 class = "h6 mt-3 title-choose text-center">Custom service</h4>
                    <p class = " custom-p-reason px-3">Your journey is unique, and so is our approach. Experience real estate tailored to your needs. We provide the best property for you</p>
                 </div>
                 <div class="card bg-gray text-light col-5 col-sm-4 col-md-2 shadow-lg p-0 me-md-3 me-xl-4">
                    <img class = "card-img-top img-fluid" src="image/trust.jpg" alt="Picture of estate trust">
                    <h4 class = "h6 mt-3 title-choose text-center">Trust & integrity</h4>
                    <p class = " custom-p-reason px-3">We uphold the highest ethical standards, ensuring transparency and trust in every interaction. Property security is our priority.</p>
                 </div>
                 <div class="card bg-gray text-light col-5 col-sm-4 col-md-2 shadow-lg ms-2 ms-md-0 p-0 ms-sm-5">
                    <img class = "card-img-top img-fluid" src="image/benefit.jpg" alt="Picture of customers benefit">
                    <h4 class = "h6 mt-3 title-choose text-center">Best benefit</h4>
                    <p class = " custom-p-reason px-3">Negociation is our speciality in the market estate, in order to bring benefit of both customers and partners, with features and bonuses</p>
                 </div>
            </div>
        </div>

        <div class="mt-5">
            <h3 class="custom-t-partner text-center">Features we provide</h3>
            <p class = "custom-p-choose text-md-center">We always strive to provide premium services for customer satisfaction</p>
            <div class = "row mt-md-4 mt-xl-5 ms-xl-5">
                 <img class = "img-fluid d-none d-md-block col-md-5 ms-md-5 custom-m-img" src="image/feature-house.jpg" alt="Picture of modern house">
                 <div class="d-flex flex-column col-md-5">
                    <div class = "custom-ff">
                        <p class = "custom-p-feature text-light"><i class="fa fa-money-check custom-m-icon"></i>Affordable & best price</p>
                   </div>
                   <div class = "custom-ff mt-2 mt-lg-4">
                        <p class = "custom-p-feature text-light"><i class="fa fa-database custom-m-icon"></i>Guaranteed data security</p>
                   </div>
                   <div class = "custom-ff mt-2 mt-lg-4">
                        <p class = "custom-p-feature text-light"><i class="fa fa-tasks custom-m-icon"></i>Quick process</p>
                   </div>
                   <div class = "custom-ff mt-2 mt-lg-4">
                       <p class = "custom-p-feature text-light"><i class="fa fa-user custom-m-icon"></i>24/7 support center</p>
                   </div>
                 </div>
            </div>
        </div>

        <div class = "mt-5 position-relative ms-lg-5">
            <h3 class="custom-t-partner ms-5">Our latest properties</h3>
            <div class="col-3 position-absolute" style = "top : -0.5rem; right : 2rem;">
                <i id = "prev-btn" class="fa fa-chevron-left custom-slide ms-md-5 me-2 me-md-0"></i>
                <i id = "next-btn" class="fa fa-chevron-right custom-slide ms-md-4"></i>
            </div>
            <div id="main-slide" class = "overflow-hidden ms-4 mt-4" style = "width : 90%;">
            <div id = "container-slide" class = "d-flex flex-row">
            <div id = "card1" class="card col-6 col-md-4 col-lg-3 position-relative px-0">
                <img class = "card-img-top img-fluid" src="image/tree-house.jpg" alt="Tree house's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "fw-bolder" style = "font-family: 'Kalnia';">Sale</p>
                        <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$8 000</p>
                    </div>
                    <p class = "fw-bolder" style = "font-family: 'Kalnia';  margin-top: -0.3rem; ">Tree house</p>
                    <p style = "font-size: 0.75em;  margin-top: -1rem;"><i class="fa fa-map-marker-alt me-2"></i>Ambohipeno, Antsirabe, 111</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p style = "font-size: 0.75em;"><i class="fa fa-hotel me-1"></i>4</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-bed me-1"></i>2</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-car me-1"></i>1</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-leaf me-1"></i>Garden</p>
                    </div>
                  </div>
                  <button class = "btn" style = "background-color: #4e4c5a; font-size: 0.8em; color : white; width : 100%;">Purchase</button>
            </div>
            <div id = "card2" class="card col-6 col-md-4 col-lg-3 position-relative ms-2 px-0">
                <img class = "card-img-top img-fluid" src="image/imperial-villa.jpg" alt="Tree house's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "font-location fw-bolder" style = "font-family: 'Kalnia';">Sale</p>
                        <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$40 000</p>
                    </div>
                    <p class = "fw-bolder" style = "font-family: 'Kalnia';  margin-top: -0.3rem; ">Imperial Villa</p>
                    <p style = "font-size: 0.75em;  margin-top: -1rem;"><i class="fa fa-map-marker-alt me-2"></i>Ambohimalaza, Antananarivo, 103</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p style = "font-size: 0.75em;"><i class="fa fa-hotel me-1"></i>4</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-bed me-1"></i>2</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-car me-1"></i>1</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-leaf me-1"></i>Garden</p>
                    </div>
                  </div>
                  <button class = "btn" style = "background-color: #4e4c5a; font-size: 0.8em; color : white; width : 100%;">Purchase</button>
            </div>
            <div id = "card3" class="card col-6 col-md-4 col-lg-3 position-relative ms-2 px-0">
                <img class = "card-img-top img-fluid" src="image/officiam.jpg" alt="Tree house's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "font-location fw-bolder" style = "font-family: 'Kalnia';">Sale</p>
                        <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$8 000</p>
                    </div>
                    <p class = "fw-bolder" style = "font-family: 'Kalnia';  margin-top: -0.3rem; ">Officiam</p>
                    <p style = "font-size: 0.75em;  margin-top: -1rem;"><i class="fa fa-map-marker-alt me-2"></i>Analakely, Antananarivo, 101</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p style = "font-size: 0.75em;"><i class="fa fa-hotel me-1"></i>4</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-bed me-1"></i>2</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-car me-1"></i>1</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-leaf me-1"></i>Garden</p>
                    </div>
                  </div>
                  <button class = "btn" style = "background-color: #4e4c5a; font-size: 0.8em; color : white; width : 100%;">Purchase</button>
            </div>
            <div id = "card4" class="card col-6 col-md-4 col-lg-3 position-relative ms-2 px-0">
                <img class = "card-img-top img-fluid" src="image/middle-house.jpg" alt="Tree house's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "font-location fw-bolder" style = "font-family: 'Kalnia';">Sale</p>
                        <p class="h6 fw-bolder  me-lg-2" style = "font-family: 'Kalnia';">$8 000</p>
                    </div>
                    <p class = "fw-bolder" style = "font-family: 'Kalnia';  margin-top: -0.3rem; ">Middle house</p>
                    <p style = "font-size: 0.75em;  margin-top: -1rem;"><i class="fa fa-map-marker-alt me-2"></i>Ivato, Antananarivo, 105</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p style = "font-size: 0.75em;"><i class="fa fa-hotel me-1"></i>4</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-bed me-1"></i>2</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-car me-1"></i>1</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-leaf me-1"></i>Garden</p>
                    </div>
                  </div>
                  <button class = "btn" style = "background-color: #4e4c5a; font-size: 0.8em; color : white; width : 100%;">Purchase</button>
            </div>
            <div id = "card5" class="card col-6 col-md-4 col-lg-3 position-relative ms-2 px-0">
                <img class = "card-img-top img-fluid" src="image/apartmenta.jpg" alt="Tree house's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "font-location fw-bolder" style = "font-family: 'Kalnia';">Sale</p>
                        <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$8 000</p>
                    </div>
                    <p class = "fw-bolder" style = "font-family: 'Kalnia';  margin-top: -0.3rem; ">Apartmenta</p>
                    <p style = "font-size: 0.75em;  margin-top: -1rem;"><i class="fa fa-map-marker-alt me-2"></i>Ampefiloha, Antananarivo, 101</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p style = "font-size: 0.75em;"><i class="fa fa-hotel me-1"></i>4</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-bed me-1"></i>2</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-car me-1"></i>1</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-leaf me-1"></i>Garden</p>
                    </div>
                  </div>
                  <button class = "btn" style = "background-color: #4e4c5a; font-size: 0.8em; color : white; width : 100%;">Purchase</button>
            </div>
            <div id = "card6" class="card col-6 col-md-4 col-lg-3 position-relative ms-2 px-0">
                <img class = "card-img-top img-fluid" src="image/abstract-store.jpg" alt="Tree house's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "font-location fw-bolder" style = "font-family: 'Kalnia';">Sale</p>
                        <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$8 000</p>
                    </div>
                    <p class = "fw-bolder" style = "font-family: 'Kalnia';  margin-top: -0.3rem; ">Abstract store</p>
                    <p style = "font-size: 0.75em;  margin-top: -1rem;"><i class="fa fa-map-marker-alt me-2"></i>Tsaralalana, Antananarivo, 101</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p style = "font-size: 0.75em;"><i class="fa fa-hotel me-1"></i>4</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-bed me-1"></i>2</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-car me-1"></i>1</p>
                        <p style = "font-size: 0.75em;"><i class="fa fa-leaf me-1"></i>Garden</p>
                    </div>
                  </div>
                  <button class = "btn" style = "background-color: #4e4c5a; font-size: 0.8em; color : white; width : 100%;">Purchase</button>
            </div>
        </div>
    </div>
        <button id = "explore-btn" class = "btn btn-explore" type="button">Explore more</button>
        </div>
    
    <section class = "mt-5 ms-4 ms-md-5 text-light">
        <article class = "section-setting rounded p-3">
           <h3 id = "aboutUs" class = "title-about text-md-center fw-bolder mb-3 mb-md-4">About Planimmo</h3>
           <div class="row">
               <div class = "col-12 col-md-5 ms-xl-4 carousel slide mb-3" data-bs-ride="carousel">
                   <div class="carousel-inner">
                       <div class="carousel-item active" data-bs-interval="10000">
                        <img class = "img-fluid rounded" src="image/about.jpg" alt="">
                       </div>
                       <div class="carousel-item" data-bs-interval="10000">
                        <img class = "img-fluid rounded" src="image/about2.jpg" alt="">
                       </div>
                       <div class="carousel-item" data-bs-interval="10000">
                        <img class = "img-fluid rounded" src="image/about3.jpg" alt="">
                       </div>
                       <div class="carousel-item" data-bs-interval="10000">
                        <img class = "img-fluid rounded" src="image/about4.jpg" alt="">
                       </div>
                   </div>
               </div>
               <div class = "col-12 col-md-6 position-relative">
                <p class = "p-about"><span style = "font-family: 'Kalnia';">Planimmo</span>, an innovative real estate agency, stands out out with its strong foundations and values
                centered around integrity, transparency and excellence. Our dedicated team, composed of passionate and skilled experts, is committed to providing exceptional real
                services. Founded with the vision of redefining the real estate experience, Planimmo ensures open and honest communication, placing the needs of our clients at the heart
                of every transaction. Whether you are looking for your dream home or aiming to sell the property, the Planimmo team is your trusted partner at every step of the process.</p>
                <button id = "about" class="btn bg-gray about-p text-light ms-2 my-2 p-2 px-lg-3" type="button" data-bs-toggle="modal" data-bs-target="#company-work">Learn more</button>
                </div>

                <div id = "company-work" class="modal ms-5 ms-md-0">
                    <div class="modal-dialog text-dark">
                        <div class="modal-content custom-modal pe-4 ps-5 ps-md-4">
                            <div class="modal-body">
                                <div>
                                    <h2 class="d-block d-lg-none h6 modal-title text-center title-lead mb-3">How company works ?</h2>
                                    <h2 class="d-none d-lg-block h5 modal-title text-center title-lead">How company works ?</h2>
                                </div>
                                <div class = "mt-md-4 mb-3 mb-lg-4 d-md-flex flex-md-row justify-content-md-between">
                                    <article class = "col-md-6 mt-lg-4 mt-xl-5">
                                        <h3 class="h6 fw-bolder">Property Acquisition and Listing</h3>
                                        <p class = "p-rate">Planimmo's process begins with the acquisition of diverse properties across prime locations. The agency carefully assesses each property's market value, potential for appreciation, and overall appeal. Once a property meets Planimmo's rigorous criteria, it is meticulously listed in the agency's portfolio.</p>
                                    </article>
                                    <div class = "col-md-5 mt-md-3">
                                        <img class = "img-fluid" src="image/work1.png" alt="Picture of company work">
                                    </div>
                                </div>
                                <div class = "mb-3 mb-lg-4 d-md-flex flex-md-row-reverse justify-content-md-between">
                                    <article class = "col-md-6 mt-lg-4 mt-xl-5">
                                        <h3 class="h6 fw-bolder">Marketing Strategies</h3>
                                        <p class = "p-rate">To maximize visibility and attract potential buyers, Planimmo employs innovative marketing strategies. This includes professional photography, virtual tours, and targeted online and offline advertising campaigns. The goal is to showcase each property's unique features and position it effectively in the competitive real estate market.</p>
                                    </article>
                                    <div class = "col-md-5 mt-md-3">
                                        <img class = "img-fluid" src="image/work2.jpg" alt="Picture of company work">
                                    </div>
                                </div>
                                <div class = "mt-md-4 mb-3 mb-lg-4 d-md-flex flex-md-row justify-content-md-between">
                                    <article class = "col-md-6 mt-lg-4 mt-xl-5">
                                        <h3 class="h6 fw-bolder"> Client Interaction and Consultation</h3>
                                        <p class = "p-rate">Planimmo values client satisfaction and prioritizes personalized service. When potential buyers express interest, the agency's experienced agents engage in consultations to understand their specific requirements. Likewise, sellers benefit from expert advice on pricing strategies and market trends to optimize their property listings.</p>
                                    </article>
                                    <div class = "col-md-5 mt-md-3">
                                        <img class = "img-fluid" src="image/work.png" alt="Picture of company work">
                                    </div>
                                </div>
                                <div class = "mb-3 mb-lg-4 d-md-flex flex-md-row-reverse justify-content-md-between">
                                    <article class = "col-md-6 mt-lg-4 mt-xl-5">
                                        <h3 class="h6 fw-bolder">Property Visits and Inspections</h3>
                                        <p class = "p-rate">Facilitating property visits is a crucial aspect of Planimmo's operations. The agency coordinates and conducts tours for interested buyers, ensuring a comprehensive understanding of the property's attributes. Additionally, rigorous inspections are carried out to address any concerns and provide clients with transparent information.</p>
                                    </article>
                                    <div class = "col-md-5 mt-md-3">
                                        <img class = "img-fluid" src="image/work4.png" alt="Picture of company work">
                                    </div>
                                </div>
                                <div class = "mt-md-4 mb-3 mb-lg-4 d-md-flex flex-md-row justify-content-md-between">
                                    <article class = "col-md-6 mt-lg-4 mt-xl-5">
                                        <h3 class="h6 fw-bolder">Negociation and Contract Finalization</h3>
                                        <p class = "p-rate">Once a buyer expresses interest, Planimmo's skilled negotiators step in to facilitate fair and favorable deals. The agency navigates the intricate process of offer and counteroffer, working towards a mutually beneficial agreement. Following successful negotiations, the team assists in finalizing contracts and legal documentation.</p>
                                    </article>
                                    <div class = "col-md-5 mt-md-3">
                                        <img class = "img-fluid" src="image/work5.png" alt="Picture of company work">
                                    </div>
                                </div>
                                <div class = "mb-3 mb-lg-4 d-md-flex flex-md-row-reverse justify-content-md-between">
                                    <article class = "col-md-6 mt-lg-4 mt-xl-5">
                                        <h3 class="h6 fw-bolder">Post-Sale Services</h3>
                                        <p class = "p-rate">Planimmo's commitment extends beyond the transaction phase. The agency provides post-sale support, guiding clients through the closing process, coordinating with legal entities, and ensuring a smooth transition for both buyers and sellers.</p>
                                    </article>
                                    <div class = "col-md-5 mt-md-3">
                                        <img class = "img-fluid" src="image/work6.png" alt="Picture of company work">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </article>
    </section>
    
        <div class = "mt-5">
            <h3 class = "h4 fw-bolder text-end" style = "margin-right: 8vw;">What our client say</h3>
            <p class = "lead-rate">After every successful transaction, we always welcome feedback and reviews from customers, so that we can become even more professional</p>
            <div class="d-flex flex-row ms-0 ms-3 ms-sm-5 me-3 me-sm-4 me-md-4 mt-4">
            <div class ="carousel slide" data-bs-ride = "carousel">
                <div class = "carousel-inner" style = "width : 90%;">
                    <div class="carousel-item active card bg-white shadow-lg p-2" data-bs-interval = "30000">
                        <div>
                            <p class = "p-rate">I'm very happy with the home-buying service. This platform helped me find the perfect home and made the real estate purchasing process easy</p>
                        </div>
                        <div class = "flex-profile">
                            <a href="">
                            <div class = "img-profile">
                                <img class = "img-fluid img-user" src="image/tranquilin.jpg" alt="Customer's picture">
                            </div><a href=""></a>
                            <div class = "ms-2">
                                <h5 class="rate-title fw-bolder"> <a href="" class = "text-decoration-none text-dark">Nahy Tranquilin</a></h5>
                                <p class = "local-rate"><a href="" class = "text-decoration-none text-dark">Ambatomaro, Antananarivo, 101</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item card bg-white shadow-lg p-2" data-bs-interval = "30000">
                        <div>
                            <p class = "p-rate">Planimmo's service was exceptional; they navigated the process seamlessly, providing expert guidance and ensuring a smooth transaction</p>
                        </div>
                        <div class = "flex-profile">
                            <a href="">
                            <div class = "img-profile">
                               <img src="image/aurnela.jpg" alt="customer's picture" class="img-fluid img-user">
                            </div></a>
                            <div class = "ms-2">
                                <h5 class="rate-title fw-bolder"> <a href="" class = "text-decoration-none text-dark">Aurnela Rakotonirina</a></h5>
                                <p class = "local-rate"><a href="" class = "text-decoration-none text-dark">Ambanitsena, Antananarivo, 103</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class ="carousel slide" data-bs-ride = "carousel">
                <div class = "carousel-inner ms-2 ms-md-1 me-lg-3" style = "width : 90%;">
                    <div class="carousel-item active card bg-white shadow-lg p-2" data-bs-interval = "30000">
                        <div>
                            <p class = "p-rate">Professionalism and transparency define Planimmo; their commitment to client satisfaction sets them apart in the competitive real estate market</p>
                        </div>
                        <div class = "flex-profile">
                            <a href="">
                            <div class = "img-profile">
                                <img class = "img-fluid img-user" src="image/tantely.jpg" alt="customer's picture">
                            </div></a>
                            <div class = "ms-2">
                                <h5 class="rate-title fw-bolder"> <a href="" class = "text-decoration-none text-dark">Tantely Ny Aina</a></h5>
                                <p class = "local-rate"><a href="" class = "text-decoration-none text-dark">Ambohijatovo, Antananarivo, 101</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item card bg-white shadow-lg p-2" data-bs-interval = "30000">
                        <div>
                            <p class = "p-rate">Planimmo exceeded expectations with their personalized approach, demonstrating a deep understanding of our needs and delivering outstanding results</p>
                        </div>
                        <div class = "flex-profile">
                            <a href="">
                            <div class = "img-profile">
                                <img class = "img-fluid img-user" src="image/rado.jpg" alt="customer's picture">
                            </div></a>
                            <div class = "ms-2">
                                <h5 class="rate-title fw-bolder"> <a href="" class = "text-decoration-none text-dark">Rado Razaka</a></h5>
                                <p class = "local-rate"><a href="" class = "text-decoration-none text-dark">Analamahitsy, Antananarivo, 101</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class ="carousel slide d-none d-md-block" data-bs-ride = "carousel">
                <div class = "carousel-inner ms-2 ms-md-1" style = "width : 90%;">
                    <div class="carousel-item active card bg-white shadow-lg p-2" data-bs-interval = "30000">
                        <div>
                            <p class = "p-rate">Impressed by Planimmo's efficiency and attention to detail, making our property search stress-free and ultimately leading to a perfect home purchase</p>
                        </div>
                        <div class = "flex-profile">
                            <a href="">
                            <div class = "img-profile">
                                <img class = "img-fluid img-user" src="image/sylvia.jpg" alt="customer's picture">
                            </div></a>
                            <div class = "ms-2">
                                <h5 class="rate-title fw-bolder"> <a href="" class = "text-decoration-none text-dark">Sylvia Rakoto</a></h5>
                                <p class = "local-rate"><a href="" class = "text-decoration-none text-dark">Ivato, Antananarivo, 105</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item card bg-white shadow-lg p-2" data-bs-interval = "30000">
                        <div>
                            <p class = "p-rate">"Highly recommend Planimmo for their responsive communication, knowledgeable team, and dedication to finding the ideal property for their clients</p>
                        </div>
                        <div class = "flex-profile">
                            <a href="">
                            <div class = "img-profile">
                                <img class = "img-fluid img-user" src="image/toky.jpg" alt="customer's picture">
                            </div></a>
                            <div class = "ms-2">
                                <h5 class="rate-title fw-bolder"> <a href="" class = "text-decoration-none text-dark">Toky Raveloson</a></h5>
                                <p class = "local-rate"><a href="" class = "text-decoration-none text-dark">Ankatso, Antananarivo, 101</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class ="carousel slide d-none d-lg-block" data-bs-ride = "carousel">
                <div class = "carousel-inner" style = "width : 90%;">
                    <div class="carousel-item active card bg-white shadow-lg p-2" data-bs-interval = "30000">
                        <div>
                            <p class = "p-rate">Planimmo's integrity and honesty in all dealings instilled confidence; their commitment to client welfare shines through in every step of process</p>
                        </div>
                        <div class = "flex-profile">
                            <a href="">
                            <div class = "img-profile">
                                <img class = "img-fluid img-user" src="image/mirindra.jpg" alt="customer's picture">
                            </div></a>
                            <div class = "ms-2">
                                <h5 class="rate-title fw-bolder"><a href="" class = "text-decoration-none text-dark">Mirindra Harilala</a></h5>
                                <p class = "local-rate"><a href="" class = "text-decoration-none text-dark">Alasora, Antananarivo, 103</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item card bg-white shadow-lg p-2" data-bs-interval = "30000">
                        <div>
                            <p class = "p-rate">Choosing Planimmo was a wise decision; their expertise, market insight, and client-focused approach make them a top-tier real estate agency</p>
                        </div>
                        <div class = "flex-profile">
                            <a href="">
                            <div class = "img-profile">
                                <img class = "img-fluid img-user" src="image/todisoa.jpg" alt="customer's picture">
                            </div></a>
                            <div class = "ms-2">
                                <h5 class="rate-title fw-bolder"> <a href="" class = "text-decoration-none text-dark">Tiavina Todisoa</a></h5>
                                <p class = "local-rate"><a href="" class = "text-decoration-none text-dark">Soanierana, Antananarivo, 101</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
            </div>
        </div>

        <div class = "shadow-lg custom-w-contact rounded row mt-5">
            <div class="bg-root col-12 col-sm-6 col-md-5 p-3 p-md-4">
                <h3 class = "h5 title-contact">We'd love to hear from you</h3>
                <p class = "about-p mt-3">Get in touch, subscribe and find super attractive price quotes from us, find your residence</p>
                <button id = "start" class = "btn bg-gray about-p ms-5 mt-2 text-light position-relative overflow-hidden" type = "button">Get started</button>
                <div class="mt-4">
                    <p class="p-contact"><a class = "link-hover text-dark text-decoration-none" href=""><i class="fa fa-map-marker-alt me-3"></i>Mahatanty Street, Soanierana, Antananarivo 101</a></p>
                    <p class = "p-contact"><a class = "link-hover text-dark text-decoration-none" href="https://www.planimmoagency@gmail.com"><i class="fa fa-envelope me-3"></i>planimmoagency@gmail.com</a></p>
                    <p class="p-contact"><a href="" class="link-hover text-dark text-decoration-none"><i class="fa fa-phone me-3"></i>+261 34 10 120 89</a></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-7 p-3 p-md-4">
                <h3 id = "contactUs" class = "h6 title-contact mb-2">Contact us</h3>
                <form class = "row g-lg-2" action="" method="post">
                    <div class="col-lg-6">
                        <input class = "p-about mt-2 rounded form-control" type="text" name="names" id="names" placeholder="Name">
                    </div>
                    <div class="col-lg-6">
                        <input class = "p-about mt-2 rounded form-control" type="text" name="fname" id="fname" placeholder = "First name">
                    </div>
                    <div class="col-lg-6">
                        <input class = "p-about mt-2 rounded form-control" type="email" name="email" id="email" placeholder = "Email">
                    </div>
                    <div class="col-lg-6">
                        <input class = "p-about mt-2 rounded form-control" type="tel" name="phone" id="phone" placeholder="Phone number">
                    </div>
                    <div class="form-floating mt-3 mb-4 col-lg-8">
                        <textarea class = "about-p form-control" name="message" id="message"></textarea>
                        <label class = "about-p text-dark ms-md-2" for="message">Message</label>
                    </div>
                    <button class = "btn bg-gray about-p text-light ms-3 col-4" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </main>

    <footer class = "modal-footer bg-dark text-light d-sm-flex flex-sm-row mt-lg-0">
        <div class= "col-12 d-flex float-none justify-content-between flex-sm-column col-sm-5 me-sm-2">
            <img class = "ms-3 mt-2" src="image/logo.png" alt="Logo de Planimmo" style="width : 90px; height : 60px;">
            <p style="font-size: 0.75em; width : 60%;">The trusted real estate agency providing expertise, transparency and exceptional service in every transaction. Your reliable real estate partner</p>
        </div>

        <div class="col-12 col-sm-5 d-flex flex-row me-sm-5" style = "font-size: 0.75em;">
            <div class="col-4 ms-4 ms-sm-0 me-sm-3">
                <h3 class = "h6">Services</h3>
                <ul class = "list-unstyled">
                    <li><a class = "text-light" href="explore" style = "text-decoration: none;">Estate market</a></li>
                    <li><a class = "text-light" href="" style = "text-decoration: none;">Blog</a></li>
                    <li><a class = "text-light" href="sell" style = "text-decoration: none;">Sell</a></li>
                </ul>
            </div>
            <div class="col-4 me-sm-3">
                <h3 class = "h6">Company</h3>
                <ul class = "list-unstyled">
                    <li><a class = "text-light" href="blog#aboutUs" style = "text-decoration: none;">Company work</a></li>
                    <li><a class = "text-light" href="" style = "text-decoration: none;">Privacy policy</a></li>
                    <li><a class = "text-light" href="" style = "text-decoration: none;">Security</a></li>
                </ul>
            </div>
            <div class="col-4">
                <h3 class = "h6">Support</h3>
                <ul class = "list-unstyled">
                    <li><a class = "text-light" href="blog#aboutUs" style = "text-decoration: none;">About us</a></li>
                    <li><a class = "text-light" href="blog#contactUs" style = "text-decoration: none;">Contact</a></li>
                </ul>
            </div>
        </div>
        
        <div class="col-12 col-sm-6 col-xl-4 me-sm-4 row ms-5 ms-xl-0 me-xl-5 text-center text-sm-right text-xl-start">
            <div class="col-3">
                <a href="https://www.facebook.com/planimmoagency"><i class="fa-brands fa-facebook text-light"></i></a>
            </div>
            <div class="col-3">
                <a href="https://www.instagram.com/planimmoagency"><i class="fa-brands fa-instagram text-light"></i></a>
            </div>
            <div class="col-3">
                <a href="https://www.whatsapp.com/planimmoagency"><i class="fa-brands fa-whatsapp text-light"></i></a>
            </div>
            <div class="col-3">
                <a href="https://t.me/planimmoagency"><i class="fa-brands fa-telegram text-light"></i></a>
            </div>
        </div>
        
        <div class = "col-12">
            <hr class = "ms-0">
            <p class = "text-white text-center" style = "font-size: 0.55em;">© 2024 PlanImmo - All rights reserved</p>
        </div>
     </footer>

     <script src="views/blog.js"></script>
    <script src="bootstrap/BootJs/bootstrap.bundle.js"></script>

</body>
</html>