'use strict'

const submit = document.getElementById('btn-submit');
const inputs = document.getElementsByTagName('input');

submit.addEventListener('click', function() {
    Swal.fire({
        html : '<i class="fa fa-spinner fa-spin" style = "color : white; margin-top : 20px; font-size : 1em;"></i>',
        showConfirmButton : false,
        allowOutsideClick : false,
        customClass : {
            popup : "loading-content",
        },
        onBeforeOpen : () => {
            Swal.showLoading();
        },
    });

    setTimeout(() => {
        Swal.close();
        Swal.fire({
           allowOutsideClick : false,
           html : '<i class = "fa fa-check-circle d-block d-xl-none fs-3 md-fs-2 mt-2 mb-2 mb-lg-2 mt-sm-3"></i><i class = "fa fa-check-circle display-3 m-0 d-none d-xl-block"></i><p class = "mt-0 mt-sm-3 mt-md-4 mt-lg-5 d-block d-xl-none">An email was sent to your email address for resetting your password. Please check your email box</p><p class = "mt-1 mt-sm-3 mt-md-4 mt-lg-5 w-75 d-none d-xl-block" style = "margin-left : 4.7rem;">An email was sent to your email address for resetting your password. Please check your email box</p>',
           confirmButtonColor : "#ff9575",
           customClass : { 
              popup : "custom-dialog",
           },
        }).then((result) => {
            if(result.isConfirmed) {
            }
        });
    }, 2000);
})








