<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Planimmo - Sign up</title>
    <link rel="stylesheet" href="bootstrap/BootCss/bootstrap.css">
    <script defer src="bootstrap/BootJs/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="fontawesome/all.css">
    <link rel="stylesheet" href="fontawesome/brands.css">
    <link rel="stylesheet" href="views/signup.css">
    <link rel="stylesheet" href="sweetAlert/sweetalert2.css">
   
</head>

<body class = "root-setting">
    <div class = "mt-4 mb-md-5 ms-2 ms-sm-4 col-12">
        <p class = "font-link ms-xl-5"><a href="create-account" class = "text-light text-decoration-none"><i class="fa fa-chevron-left ms-3 me-2"></i>Back</a></p>
    </div>

    <main class = "d-md-flex flex-md-row">
        <div class="d-none d-md-block image-holder overflow-hidden">
            <img class = "img-fluid img-setting" src="image/signin.png" alt="">
        </div>

        <section class = "custom-section rounded d-table py-3 px-4 px-xl-5">
            <form action = "" method="post">
                <h2 class="h4 text-center title-lead text-light mb-4">Create an account</h2>
                <div class="mb-3 position-relative">
                    <i class="fa fa-user text-gray fs-6 me-4 position-absolute mt-2 ms-3 me-4"></i>
                    <input class="form-control form-setting" type="text" name="identifier" placeholder="Username" autocomplete="off" style = "text-indent: 1.9rem;">
                </div>
                <div class="mb-3 position-relative">
                    <i class="fa fa-envelope text-gray fs-6 me-4 position-absolute mt-2 ms-3 me-4"></i>
                    <input class="form-control form-setting" type="email" name="email" placeholder="Email address" autocomplete="off" style = "text-indent: 1.9rem;">
                </div>
                <div class="mb-3 position-relative">
                    <i class="fa fa-lock text-gray fs-6 me-4 position-absolute mt-2 ms-3 me-4"></i>
                    <input class="form-control form-setting" type="password" name="password" placeholder="Password" style = "text-indent: 1.9rem;">
                    <i id = "lock-pwd" class="d-none fa fa-eye hide-icon position-absolute" style = "cursor : pointer;"></i>
                </div>
                <div class="mb-3 position-relative">
                    <i class="fa fa-lock text-gray fs-6 me-4 position-absolute mt-2 ms-3 me-4"></i>
                    <input class="form-control form-setting" type="password" name="password-repeat" placeholder="Confirm password" style = "text-indent: 1.9rem;">
                    <i id = "lock-pwd2" class="d-none fa fa-eye hide-icon position-absolute" style = "cursor : pointer;"></i>
                </div>
                <div class="mb-3 position-relative">
                    <div class="form-check"><label class="mt-2 form-check-label font-link"><input class="form-check-input" type="checkbox">I agree to the <a class = "text-white" href="">license terms</a> and <a class = "text-white" href="security#privacy">privacy policy</a></label></div>
                </div>

                <div class="mb-3">
                    <button id = "btn-signup" class="btn bg-gray text-light fs-btn w-100 mt-3 overflow-hidden position-relative" type="button">Sign Up</button>
                </div>
            </form>
        </section>
    </main>

    <script src="views/signup.js"></script>
    <script src="sweetAlert/sweetalert2.js"></script>
</body>

</html>