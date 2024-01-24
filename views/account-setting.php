<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Planimmo - Personal information</title>
    <link rel="stylesheet" href="bootstrap/BootCss/bootstrap.css">
    <script defer src="bootstrap/BootJs/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="fontawesome/all.css">
    <link rel="stylesheet" href="fontawesome/brands.css">
    <link rel="stylesheet" href="views/account.css">
    <link rel="stylesheet" href="sweetAlert/sweetalert2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>

<body class = "root-setting">
    <div class = "mt-4 mb-md-5 ms-2 ms-sm-4 col-12">
        <p class = "font-link ms-xl-5"><a href="index.html" class = "text-light text-decoration-none"><i class="fa fa-chevron-left ms-3 me-2"></i>Back</a></p>
    </div>

    <section class = "custom-section rounded d-table d-md-flex flex-md-row justify-content-md-between py-3 px-4 px-xl-5 mb-5">
        <div class = "d-none d-md-block custom-block">
            <h1 class="h4 d-none d-md-block title-lead text-light mt-md-4 ms-md-4 ms-lg-5">We've almost finished...!</h1>
            <div class="d-none d-md-block image-holder mt-md-5 mt-xl-4">
                <img class = "img-setting" src="image/signin.png" alt="">
            </div>
            <p class = "d-none d-md-block p-lead text-light w-xl-100 ms-md-5 mt-md-3 ms-xl-3 mt-xl-4">Complete your registration by adding your personal information. Please fill in the required fields</p>
        </div>

        <div class = "me-md-4 ms-md-4 ms-xl-5 col-md-5">
            <form id = "upload-form" action = "upload.php" method="post" enctype="multipart/form-data">
                <h1 class="d-block d-md-none h4 text-center title-lead text-light mb-3">We've almost finished...!</h1>
                <div class = "d-flex flex-row">
                    <div class = "position-relative">
                        <img id = "imgUser" class = "img-upload img-fluid position-relative" src="image/user.png" alt="Profile of the user">
                        <i id = "upload-icon" class="fa fa-plus bg-white p-2 rounded-circle position-absolute upload-icon"></i>
                    </div>
                    <p class = "w-75 font-link text-light text-center justify-content-between mt-3 ms-2">Upload your picture for your profile (Optional)<br> Max size : 2.5 MB</p>
                </div>

                <p class = "d-block d-md-none p-lead ms-2 mt-4 text-light">Complete your registration by adding your personal information. Please fill in the required fields</p>
                <div class="mt-md-5 mt-xl-3 mb-3 position-relative">
                    <i class="fa fa-user text-gray fs-6 me-4 position-absolute mt-2 ms-3 me-4"></i>
                    <input class="form-control form-setting" type="text" name="myName" placeholder="Name" style = "text-indent: 2.5rem;">
                </div>
                <div class="mb-3 position-relative">
                    <i class="fa fa-user text-gray fs-6 me-4 position-absolute mt-2 ms-3 me-4"></i>
                    <input class="form-control form-setting" type="text" name="firstName" placeholder="First name" style = "text-indent: 2.5rem;">
                </div>
                <div class="mb-3 position-relative">
                    <i class="fa fa-calendar-alt text-gray fs-6 me-4 position-absolute mt-2 ms-3 me-4"></i>
                    <input id = "birthDate" class="form-control form-setting bg-white" type="text" name="birth" placeholder="Birth date" style = "text-indent: 2.5rem;">
                </div>
                <div class="mb-3 position-relative">
                    <i class="fa fa-map-marker-alt text-gray fs-6 me-4 position-absolute mt-2 ms-3 me-4"></i>
                    <input class="form-control form-setting" type="text" name="location" placeholder="Live city" style = "text-indent: 2.5rem;">
                </div>
                <div class="mb-3 position-relative">
                    <input id = "phoneNumber" class="form-control form-setting2" type="tel" name="phoneNumber" placeholder="Phone number">
                </div>

                <div class="mb-3">
                    <button id = "btn-submit" class="btn bg-gray text-light fs-btn w-100 mt-3 overflow-hidden position-relative" type="button">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <script src="views/account.js"></script>
    <script src="sweetAlert/sweetalert2.js"></script>
    <script>
        const phoneInputField = document.getElementById("phoneNumber"); 
        const phoneInput = window.intlTelInput(phoneInputField, {
            preferredCountries : ["mg", "mu", "sc" , "fr", "us"],
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        phoneInputField.addEventListener('countrychange', function (event) {
                const selectedCountryData = phoneInput.getSelectedCountryData();
                const dialCode = selectedCountryData.dialCode;

                phoneInputField.value = '+' + dialCode;
            });
    </script>
</body>

</html>