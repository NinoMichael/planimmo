<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanImmo - Estate market</title>
    <link rel="stylesheet" href="bootstrap/BootCss/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/all.css">
    <link rel="stylesheet" href="fontawesome/brands.css">
    <link rel="stylesheet" href="views/explore.css">
</head>

<body class = "root-setting">
    <header class = "bg-explore navbar navbar-expand-md d-flex flex-row-reverse d-md-flex flex-md-row">
            <img class="navbar-brand custom-m-logo" src="image/logo.png" alt="Planimmo's logo">
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
        <div id="search">
           <form action="" method="post">
               <input class="form-control custom-bg-search" type="text" name="research" id="research" placeholder="Search location" autocomplete="off">
               <i class="fa fa-search fa-lg position-absolute custom-m-search"></i>
               <i id = "filter" class="fa fa-filter position-absolute custom-m-filter"></i>
           </form>
        </div>

        <div id="filter-container" class = "invisible custom-f-position col-10 col-sm-9 col-md-7 p-3 shadow-lg bg-white rounded h-50">
            <i id = "close-button" class="fa fa-times position-absolute end-0 mt-2 me-3 custom-f-border"></i>
            <form action="" method="post" class = "custom-filter-form pt-2">
                <div class="title-form d-flex ">
                    <i class="mt-1 ms-4 fa fa-filter"></i>
                    <p class="ms-3 title-form-p">Search filter</p>
                </div>

                <div class="form-floating custom-m-select col-10">
                   <select name="house" id="house" class = "form-select custom-select ms-3">
                       <option selected>All</option>
                       <option value="house">House</option>
                       <option value="apartment">Apartment</option>
                       <option value="office">Office</option>
                       <option value="store">Store</option>
                   </select>
                   <label for="house" style = "text-indent: 3.5vw; color : white;">Estate type <i class="fa fa-house"></i></label>
                </div>

                <div class="position-absolute custom-check-position">
                    <div class="form-check">
                        <label for="saleCheck" class = "form-check-label">
                            <input type="checkbox" name="saleCheck" id="saleCheck" class = "form-check-input" checked>
                            Sale</label>
                    </div>
                    <div class="form-check">
                        <label for="rentCheck" class = "form-check-label">
                            <input type="checkbox" name="rentCheck" id="rentCheck" class = "form-check-input" checked>
                            Rent</label>
                    </div>
                    </div>
                
                <div >
                <p class = "ms-2 custom-p-price">Price range</p>
                <div class = "ms-2 custom-font-price col-5 d-flex flex-row">
                        <div class="d-flex flex-column">
                            <input type = "text" name ="price" id = "min-price" class = "custom-bg-price" value="$100"/>
                            <p class = "text-center custom-minmax">min</p>
                        </div>
                        <div class="d-block ms-4">
                            <input type = "text" name ="price" id = "max-price" class = "custom-bg-price" value="$500000"/>
                            <p class = "text-center custom-minmax">max</p>
                        </div>
                </div>
                </div>

                    <div class=" form-floating col-8 position-absolute custom-select-location">
                        <select name="location-search" id="location-search" class = "form-select custom-select">
                            <option selected>Anywhere</option>
                            <option value="antananarivo">Antananarivo</option>
                            <option value="antsirabe">Antsirabe</option>
                            <option value="toamasina">Toamasina</option>
                            <option value="mahajanga">Mahajanga</option>
                        </select>
                        <label for="location-search" style = "text-indent: 0vw; color : white;">Location <i class="fa fa-location ms-2"></i></label>
                    </div>

                <div class = "d-flex flex-row mt-1 ms-3 ms-sm-5">
                    <p class="ms-sm-4">Rooms : </p>
                    <ul class = "list-unstyled list-inline ms-4">
                        <li class = "list-inline-item custom-list-room">1</li>
                        <li class = "list-inline-item custom-list-room">2</li>
                        <li class = "list-inline-item custom-list-room">3</li>
                        <li class = "list-inline-item custom-list-room">4+</li>
                    </ul>
                </div>
            </form>
        </div>
        
        <div class="d-lg-flex flex-lg-row">
        <form action = "" method = "post">
        <div class="custom-filter2 pt-4 col-lg-3 col-xl-2 bg-light shadow-lg float-lg-start" style = "font-size: 0.9em;">
            <div class = "mt-3 ms-4">
                <h5 class = "custom-lead-f2 mb-4">Filters <i class="fa fa-filter ms-2"></i></h5>
                <h5 class = "custom-font-f2 mt-3 mt-xl-4">Market state</h5>
                <div class = "custom-m-check">
                    <div class="form-check">
                        <label for="saleCheck" class = "form-check-label">
                            <input type="checkbox" name="saleCheck" id="saleCheck" class = "form-check-input" checked>
                            Sale</label>
                     </div>
                    <div class="form-check">
                         <label for="rentCheck" class = "form-check-label">
                            <input type="checkbox" name="rentCheck" id="rentCheck" class = "form-check-input" checked>
                            Rent</label>
                     </div>
                </div>
            </div>

            <div class="form-floating mt-4 ms-2 mt-xl-5">
                <select name="house" id="house" class = "form-select custom-select-f2 ms-3">
                    <option selected>All</option>
                    <option value="house">House</option>
                    <option value="apartment">Apartment</option>
                    <option value="office">Office</option>
                    <option value="store">Store</option>
                </select>
                <label for="house" style = "text-indent: 1.5vw; color : white;">Estate type <i class="fa fa-house"></i></label>
            </div>

            <div class = "mt-4 ms-4 mt-xl-5">
                <h5 class="custom-font-f2">Price range</h5>
                <div class = "mt-3 ms-0 col-5 d-flex flex-row">
                    <div class="d-block me-3">
                        <input type = "text" name ="price" id = "min-price" class = "custom-bg-price2" value="$100"/>
                        <p class = "mt-3 ms-4">min</p>
                    </div>
                    <div class="d-block ms-4 ms-xl-3">
                        <input type = "text" name ="price" id = "max-price" class = "custom-bg-price2" value="$500000"/>
                        <p class = "mt-3 ms-4">max</p>
                    </div>
                 </div>
            </div>

            <div class="form-floating mt-2 ms-2 mt-xl-3">
                <select name="location-search2" id="location-search2" class = "form-select custom-select-f2 ms-3">
                    <option selected>Anywhere</option>
                    <option value="antananarivo">Antananarivo</option>
                    <option value="antsirabe">Antsirabe</option>
                    <option value="toamasina">Toamasina</option>
                    <option value="mahajanga">Mahajanga</option>
                </select>
                <label for="house" style = "text-indent: 1.5vw; color : white;">Location <i class="fa fa-map-marker-alt"></i></label>
            </div>

            
            <div class="mt-4 ms-4 mt-xl-5">
               <h5 class="custom-font-f2">Rooms</h5>
               <ul class = "list-unstyled list-inline mt-3 ms-0">
                  <li class = "list-inline-item custom-list-room">1</li>
                  <li class = "list-inline-item custom-list-room">2</li>
                  <li class = "list-inline-item custom-list-room">3</li>
                  <li class = "list-inline-item custom-list-room">4+</li>
               </ul>
            </div>

            <div class="form-floating mt-4 ms-2">
                <select name="post-date" id="post-date" class = "form-select custom-select-f2 ms-3">
                    <option value = "today" selected>Today</option>
                    <option value="yesterday">Yesterday</option>
                    <option value="three-days">3 days ago</option>
                    <option value="week">One week ago</option>
                    <option value="month">One month ago</option>
                    <option value="two-month">Two months ago</option>
                </select>
                <label for="house" style = "text-indent: 1.5vw; color : white;">Post date <i class="fa fa-clock"></i></label>
            </div>

            <div class = "custom-m">
                <button type="submit" class = "btn custom-btn-f2">Search estate</button>
            </div>
        
            <div class = "mt-5">
               <p class = "custom-link text-center"><a href="" class = "text-dark">Create a planimmo account ?</a></p>
            </div>
            <form>
        </div>

        <div class="d-block d-lg-flex flex-lg-column">
        <div class="mt-4 mt-lg-5 ms-2 ms-sm-4 mt-md-5 ms-md-2 ms-lg-4 ms-xl-4 col-12 row g-5 g-md-3 justify-content-md-center pe-lg-4 pe-xl-0 justify-content-lg-start">
            <div class="card col-5 ms-3 p-0 col-md-3 col-xl-3 ms-lg-3 custom-col ms-xl-2">
                <img class = "card-img-top img-fluid" src="image/middle-house.jpg" alt="Middle house's picture">
                <div class = "card-body py-2 px-3">
                  <div class="d-flex flex-row justify-content-between">
                      <p class = "font-card fw-bolder" style = "font-family: 'Kalnia';">Sale</p>
                      <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$20 000</p>
                  </div>
                  <p class = "fw-bolder custom-m-city1" style = "font-family: 'Kalnia';">Middle house</p>
                  <p class = "font-card custom-m-city2"><i class="fa fa-map-marker-alt me-2"></i>Ivato, Antananarivo, 105</p>
                  <hr>
                  <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                      <p class = "font-card"><i class="fa fa-hotel me-1"></i>6</p>
                      <p class = "font-card"><i class="fa fa-bed me-1"></i>3</p>
                      <p class = "font-card"><i class="fa fa-car me-1"></i>1</p>
                      <p class = "font-card"><i class="fa fa-leaf me-1"></i>Garden</p>
                  </div>
                </div>
                <a href = "property" class = "btn custom-card-btn position-absolute top-100">Purchase</a>
            </div>
            <div class="card col-5 ms-3 p-0 col-md-3 col-xl-3 ms-lg-3 custom-col ms-xl-2">
                <img class = "card-img-top img-fluid" src="image/apartmenta.jpg" alt="Apartmenta's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "font-card fw-bolder" style = "font-family: 'Kalnia';">Rent</p>
                        <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$200</p>
                    </div>
                    <p class = "fw-bolder custom-m-city1" style = "font-family: 'Kalnia';">Apartmenta</p>
                    <p class = "font-card custom-m-city2"><i class="fa fa-map-marker-alt me-2"></i>Ampefiloha, Antananarivo, 101</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p class = "font-card"><i class="fa fa-hotel me-1"></i>3</p>
                        <p class = "font-card"><i class="fa fa-bed me-1"></i>2</p>
                        <p class = "font-card"><i class="fa fa-home me-1"></i>Colocation</p>
                    </div>
                  </div>
                  <a href = "property" class = "btn custom-card-btn position-absolute top-100">Purchase</a>
            </div>
            <div class="card col-5 ms-3 p-0 col-md-3 col-xl-3 ms-lg-3 custom-col ms-xl-2">
                <img class = "card-img-top img-fluid" src="image/abstract-store.jpg" alt="Abstract store's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "font-card fw-bolder" style = "font-family: 'Kalnia';">Sale</p>
                        <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$1 000</p>
                    </div>
                    <p class = "fw-bolder custom-m-city1" style = "font-family: 'Kalnia';">Abstract store</p>
                    <p class = "font-card custom-m-city2"><i class="fa fa-map-marker-alt me-2"></i>Tsaralalana, Antananarivo, 101</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p class = "font-card"><i class="fa fa-hotel me-1"></i>2</p>
                        <p class = "font-card"><i class="fa fa-parking me-1"></i>2</p>
                        <p class = "font-card"><i class="fa fa-home me-1"></i>Colocation</p>
                    </div>
                  </div>
                  <a href = "property" class = "btn custom-card-btn position-absolute top-100">Purchase</a>
            </div>
            <div class="card col-5 ms-3 p-0 mt-md-5 mt-lg-3 col-md-3 col-xl-3 ms-lg-3 custom-col ms-xl-2">
                <img class = "card-img-top img-fluid" src="image/tree-house.jpg" alt="Tree house's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "font-card fw-bolder" style = "font-family: 'Kalnia';">Sale</p>
                        <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$8 000</p>
                    </div>
                    <p class = "fw-bolder custom-m-city1" style = "font-family: 'Kalnia';">Tree house</p>
                    <p class = "font-card custom-m-city2"><i class="fa fa-map-marker-alt me-2"></i>Ambohipeno, Antsirabe, 111</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p class = "font-card"><i class="fa fa-hotel me-1"></i>4</p>
                        <p class = "font-card"><i class="fa fa-bed me-1"></i>2</p>
                        <p class = "font-card"><i class="fa fa-car me-1"></i>1</p>
                        <p class = "font-card"><i class="fa fa-leaf me-1"></i>Garden</p>
                    </div>
                  </div>
                  <a href = "property" class = "btn custom-card-btn position-absolute top-100">Purchase</a>
            </div>
            <div class="card col-5 ms-3 p-0 mt-md-5 col-md-3 col-xl-3 ms-lg-3 custom-col ms-xl-2">
                <img class = "card-img-top img-fluid" src="image/large-villa.jpg" alt="Large villa's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "font-card fw-bolder" style = "font-family: 'Kalnia';">Sale</p>
                        <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$15 000</p>
                    </div>
                    <p class = "fw-bolder custom-m-city1" style = "font-family: 'Kalnia';">Large villa</p>
                    <p class = "font-card custom-m-city2"><i class="fa fa-map-marker-alt me-2"></i>Andohalo, Antananarivo, 101</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p class = "font-card"><i class="fa fa-hotel me-1"></i>6</p>
                        <p class = "font-card"><i class="fa fa-bed me-1"></i>2</p>
                        <p class = "font-card"><i class="fa fa-car me-1"></i>1</p>
                        <p class = "font-card"><i class="fa fa-leaf me-1"></i>Garden</p>
                    </div>
                  </div>
                  <a href = "property" class = "btn custom-card-btn position-absolute top-100">Purchase</a>
            </div>
            <div class="card col-5 ms-3 p-0 mt-md-5 col-md-3 ms-lg-3 custom-col ms-xl-2">
                <img class = "card-img-top img-fluid" src="image/imperial-villa.jpg" alt="Imperial villa's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "font-card fw-bolder" style = "font-family: 'Kalnia';">Sale</p>
                        <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$40 000</p>
                    </div>
                    <p class = "fw-bolder custom-m-city1" style = "font-family: 'Kalnia';">Imperial villa</p>
                    <p class = "font-card custom-m-city2"><i class="fa fa-map-marker-alt me-2"></i>Ambohimalaza, Antananarivo, 103</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p class = "font-card"><i class="fa fa-hotel me-1"></i>8</p>
                        <p class = "font-card"><i class="fa fa-bed me-1"></i>4</p>
                        <p class = "font-card"><i class="fa fa-car me-1"></i>2</p>
                        <p class = "font-card"><i class="fa fa-swimming-pool me-1"></i>Swim</p>
                    </div>
                  </div>
                  <a href = "property" class = "btn custom-card-btn position-absolute top-100">Purchase</a>
            </div>
            <div class="card col-5 ms-3 p-0 mt-md-5 col-md-3 ms-lg-3 custom-col ms-xl-2">
                <img class = "card-img-top img-fluid" src="image/classic-house.jpg" alt="Classic house's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "font-card fw-bolder" style = "font-family: 'Kalnia';">Rent</p>
                        <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$105</p>
                    </div>
                    <p class = "fw-bolder custom-m-city1" style = "font-family: 'Kalnia';">Classic house</p>
                    <p class = "font-card custom-m-city2"><i class="fa fa-map-marker-alt me-2"></i>Vohisoa, Fianarantsoa, 301</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p class = "font-card"><i class="fa fa-hotel me-1"></i>4</p>
                        <p class = "font-card"><i class="fa fa-bed me-1"></i>2</p>
                        <p class = "font-card"><i class="fa fa-leaf me-1"></i>Garden</p>
                    </div>
                  </div>
                  <a href = "property" class = "btn custom-card-btn position-absolute top-100">Purchase</a>
            </div>
            <div class="card col-5 ms-3 p-0 mt-md-5 col-md-3 custom-col ms-lg-3 ms-xl-2">
                <img class = "card-img-top img-fluid" src="image/officiam.jpg" alt="Officiam's picture">
                <div class = "card-body py-2 px-3">
                    <div class="d-flex flex-row justify-content-between">
                        <p class = "font-card fw-bolder" style = "font-family: 'Kalnia';">Rent</p>
                        <p class="h6 fw-bolder" style = "font-family: 'Kalnia';">$75</p>
                    </div>
                    <p class = "fw-bolder custom-m-city1" style = "font-family: 'Kalnia';">Officiam</p>
                    <p class = "font-card custom-m-city2"><i class="fa fa-map-marker-alt me-2"></i>Analakely, Antananarivo, 101</p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between px-1 px-sm-3 px-md-0">
                        <p class = "font-card"><i class="fa fa-hotel me-1"></i>1</p>
                        <p class = "font-card"><i class="fa fa-car me-1"></i>1</p>
                        <p class = "font-card"><i class="fa fa-users me-1"></i>3</p>
                    </div>
                  </div>
                  <a href = "property" class = "btn custom-card-btn position-absolute top-100">Purchase</a>
            </div>
        </div> 

        <nav class = "mt-5">
            <ul class = "mt-5 pagination justify-content-center pagination-font">
                <li class = "page-item disabled" ><a class = "page-link" href="">&laquo;</a></li>
                <li class = "page-item active" ><a class = "page-link" href="">1</a></li>
                <li class = "page-item" ><a class = "page-link text-dark" href="">2</a></li>
                <li class = "page-item" ><a class = "page-link text-dark" href="">3</a></li>
                <li class = "page-item" ><a class = "page-link text-dark" href="">4</a></li>
                <li class = "page-item" ><a class = "page-link text-dark" href="">5</a></li>
                <li class = "page-item" ><a class = "page-link text-dark" href="">6</a></li>
                <li class = "page-item" ><a class = "page-link text-dark" href="">&raquo;</a></li>
            </ul>
        </nav>
        </div>
       </div>
    </main>

    <footer class = "modal-footer bg-dark text-light d-sm-flex flex-sm-row mt-lg-0">
        <div class= "col-12 d-flex float-none justify-content-between flex-sm-column col-sm-5 me-sm-2">
            <img class = "ms-3 mt-2" src="image/logo.png" alt="Logo de Planimmo" style="width : 90px; height : 60px;">
            <p style="font-size: 0.75em; width : 60%;">The trusted real estate agency providing expertise, transparency and exceptional service in every transaction. Your reliable real estate partner</p>
        </div></p>
        </div>

        <div class="col-12 col-sm-5 d-flex flex-row me-sm-5" style = "font-size: 0.75em;">
            <div class="col-4 ms-4 ms-sm-0 me-sm-3">
                <h3 class = "h6">Services</h3>
                <ul class = "list-unstyled">
                    <li><a class = "text-light" href="explore" style = "text-decoration: none;">Estate market</a></li>
                    <li><a class = "text-light" href="blog" style = "text-decoration: none;">Blog</a></li>
                    <li><a class = "text-light" href="" style = "text-decoration: none;">Sell</a></li>
                </ul>
            </div>
            <div class="col-4 me-sm-3">
                <h3 class = "h6">Company</h3>
                <ul class = "list-unstyled">
                    <li><a class = "text-light" href="blog#company-work" style = "text-decoration: none;">Company work</a></li>
                    <li><a class = "text-light" href="security#privacy" style = "text-decoration: none;">Privacy policy</a></li>
                    <li><a class = "text-light" href="security" style = "text-decoration: none;">Security</a></li>
                </ul>
            </div>
            <div class="col-4">
                <h3 class = "h6">Support</h3>
                <ul class = "list-unstyled">
                    <li><a class = "text-light" href="views/blog.html#aboutUs" style = "text-decoration: none;">About us</a></li>
                    <li><a class = "text-light" href="views/blog.html#contactUs" style = "text-decoration: none;">Contact</a></li>
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

     <script src="bootstrap/BootJs/bootstrap.bundle.js"></script>
     <script src="views/explore.js"></script>

</body>
</html>