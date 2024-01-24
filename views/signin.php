<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Planimmo - Sign in</title>
    <link rel="stylesheet" href="bootstrap/BootCss/bootstrap.css">
    <script defer src="bootstrap/BootJs/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="fontawesome/all.css">
    <link rel="stylesheet" href="fontawesome/brands.css">
    <link rel="stylesheet" href="views/signin.css">
    <link rel="stylesheet" href="sweetAlert/sweetalert2.css">

</head>

<body class = "root-setting">
    <div class = "mt-4 mb-md-5 ms-2 ms-sm-4 col-12">
        <p class = "font-link ms-xl-5"><a href="create" class = "text-light text-decoration-none"><i class="fa fa-chevron-left ms-3 me-2"></i>Back</a></p>
    </div>

    <main class = "d-md-flex flex-md-row">
        <div class="d-none d-md-block image-holder overflow-hidden">
            <img class = "img-fluid img-setting" src="image/signin.png" alt="">
        </div>

        <section class = "custom-section rounded d-table py-3 px-3 px-sm-4 px-xl-5">
            <form action = "" method="post">
                <h2 class="h4 text-center title-lead text-light mb-4">Sign in to Planimmo</h2>
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
                <div class="mb-0 position-relative">
                    <div class="form-check d-flex flex-row justify-content-between">
                        <label class="mt-2 form-check-label font-link"><input class="form-check-input" type="checkbox">Remember me</label>
                        <p class = "font-link mt-2"><a class = "text-white text-decoration-none link-hover" href="password-recovery">Forgotten password ?</a></p>
                    </div>
                </div>

                <div class="mb-3">
                    <button id = "btn-signin" class="btn bg-gray text-light fs-btn w-100 mt-3 overflow-hidden position-relative" type="button">Sign In</button>
                </div>

                <div class="mt-1">
                    <p class = "font-link text-center">Don't have an account yet ? <a class = "text-white" href="signup"> Sign Up</a></p>
                </div>
            </form>
        </section>
    </main>

    <script src="views/signin.js"></script>
    <script src="sweetAlert/sweetalert2.js"></script>
</body>

</html>