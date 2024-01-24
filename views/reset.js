'use strict'

const submit = document.getElementById('btn-submit');
const inputs = document.getElementsByTagName('input');
const lockPwd = document.getElementById('lock-pwd');
const lockPwd2 = document.getElementById('lock-pwd2');

inputs[0].addEventListener('input', function() {
    if(inputs[0].value.length > 0) {
        lockPwd.classList.replace('d-none', 'd-block');
   } else {
       lockPwd.classList.replace('d-block', 'd-none');
   }
});

inputs[1].addEventListener('input', function() {
    if(inputs[1].value.length > 0) {
        lockPwd2.classList.replace('d-none', 'd-block');
   } else {
       lockPwd2.classList.replace('d-block', 'd-none');
   }
})

lockPwd.addEventListener('click', function() {
    if(inputs[0].type === 'password') {
        lockPwd.classList.replace('fa-eye' ,'fa-eye-slash');
        inputs[0].type = 'text';

        lockPwd.addEventListener('click', function() {
            if(inputs[0].type === 'text') {
                lockPwd.classList.replace('fa-eye-slash' ,'fa-eye');
                inputs[0].type = 'password';
            }
        })
    }
})

lockPwd2.addEventListener('click', function() {
    if(inputs[1].type === 'password') {
        lockPwd2.classList.replace('fa-eye' ,'fa-eye-slash');
        inputs[1].type = 'text';

        lockPwd2.addEventListener('click', function() {
            if(inputs[1].type === 'text') {
                lockPwd2.classList.replace('fa-eye-slash' ,'fa-eye');
                inputs[1].type = 'password';
            }
        })
    }
})


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
           html : '<i class = "fa fa-check-circle d-block d-xl-none fs-3 md-fs-2 mt-2 mb-2 mb-lg-2 mt-sm-3"></i><i class = "fa fa-check-circle display-3 m-0 d-none d-xl-block"></i><p class = "mt-4 mt-sm-3 mt-md-4 d-block d-xl-none" style = "font-size : 1em;">Password reset successful !</p><p class = "mt-1 mt-sm-3 mt-md-4 mt-lg-5 w-75 d-none d-xl-block" style = "margin-left : 4.7rem; font-size : 1.3em;">Password reset successful !</p>',
           confirmButtonColor : "#ff9575",
           customClass : { 
              popup : "custom-dialog",
           },
        }).then((result) => {
            if(result.isConfirmed) {
                window.location.href = "login";
            }
        });
    }, 2000);
})








