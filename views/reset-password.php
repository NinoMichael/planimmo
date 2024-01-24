<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Planimmo - Forgotten password</title>
    <link rel="stylesheet" href="bootstrap/BootCss/bootstrap.css">
    <script defer src="bootstrap/BootJs/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="fontawesome/all.css">
    <link rel="stylesheet" href="fontawesome/brands.css">
    <link rel="stylesheet" href="views/reset.css">
    <link rel="stylesheet" href="sweetAlert/sweetalert2.css">
</head>

<body class = "root-setting">
    <div class = "mt-4 mb-md-5 ms-2 ms-sm-4 col-12">
        <p class = "font-link ms-xl-5"><a href="login" class = "text-light text-decoration-none"><i class="fa fa-chevron-left ms-3 me-2"></i>Back</a></p>
    </div>

    <main class = "d-md-flex flex-md-row">
        <div class="d-none d-md-block image-holder overflow-hidden">
            <img class = "img-fluid img-setting" src="image/signin.png" alt="">
        </div>

        <section class = "custom-section rounded d-table py-3 px-3 px-sm-4 px-xl-5">
            <div>
                <h2 class="h4 text-center title-lead text-light mb-4 mb-md-3">Reset your account password</h2>
                <p class = "text-light p-lead text-center mt-1">Please enter your new password. Note that your password must not be the same as the previous one</p>
            </div>

            <form action = "" method="post">
                <div class="mb-3 position-relative">
                    <i class="fa fa-lock text-gray fs-6 me-4 position-absolute mt-2 ms-3 me-4"></i>
                    <input class="form-control form-setting" type="password" name="password" placeholder="New password" style = "text-indent: 1.9rem;">
                    <i id = "lock-pwd" class="d-none fa fa-eye hide-icon position-absolute" style = "cursor : pointer;"></i>
                </div>
                <div class="mb-3 position-relative">
                    <i class="fa fa-lock text-gray fs-6 me-4 position-absolute mt-2 ms-3 me-4"></i>
                    <input class="form-control form-setting" type="password" name="password" placeholder="Confirm new password" style = "text-indent: 1.9rem;">
                    <i id = "lock-pwd2" class="d-none fa fa-eye hide-icon position-absolute" style = "cursor : pointer;"></i>
                </div>

                <div class="mb-3 mt-xl-2">
                    <button id = "btn-submit" class="btn bg-gray text-light fs-btn w-100 mt-3 mt-xl-4 overflow-hidden position-relative" type="button">Reset password</button>
                </div>
            </form>
        </section>
    </main>

    <script src="views/reset.js"></script>
    <script src="sweetAlert/sweetalert2.js"></script>
</body>

</html>