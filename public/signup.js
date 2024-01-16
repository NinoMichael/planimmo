'use strict'

const signup = document.getElementById('btn-signup');
const inputs = document.getElementsByTagName('input');
const lockPwd = document.getElementById('lock-pwd');
const lockPwd2 = document.getElementById('lock-pwd2') 

signup.addEventListener('click', function(e) {
    const x = e.clientX;
    const y = e.clientY;

    // Ripple click area test, getting x & y button position
     const ButtonTop = e.target.offsetTop;
     const ButtonLeft = e.target.offsetLeft;

     const xInside = x - ButtonLeft;
     const yInside = y - ButtonTop;
     
     const span = document.createElement('span');
     span.classList.add('ripple-effect');
     span.style.top = yInside + "px";
     span.style.left = xInside + "px";
     signup.appendChild(span);
});

inputs[2].addEventListener('input', function() {
    if(inputs[2].value.length > 0) {
        lockPwd.classList.replace('d-none', 'd-block');
   } else {
       lockPwd.classList.replace('d-block', 'd-none');
   }
});

inputs[3].addEventListener('input', function() {
    if(inputs[3].value.length > 0) {
        lockPwd2.classList.replace('d-none', 'd-block');
   } else {
       lockPwd2.classList.replace('d-block', 'd-none');
   }
})

lockPwd.addEventListener('click', function() {
    if(inputs[2].type === 'password') {
        lockPwd.classList.replace('fa-eye' ,'fa-eye-slash');
        inputs[2].type = 'text';

        lockPwd.addEventListener('click', function() {
            if(inputs[2].type === 'text') {
                lockPwd.classList.replace('fa-eye-slash' ,'fa-eye');
                inputs[2].type = 'password';
            }
        })
    }
})

lockPwd2.addEventListener('click', function() {
    if(inputs[3].type === 'password') {
        lockPwd2.classList.replace('fa-eye' ,'fa-eye-slash');
        inputs[3].type = 'text';

        lockPwd2.addEventListener('click', function() {
            if(inputs[3].type === 'text') {
                lockPwd2.classList.replace('fa-eye-slash' ,'fa-eye');
                inputs[3].type = 'password';
            }
        })
    }
})

signup.addEventListener('click', function() {
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
           html : '<i class = "fa fa-check-circle d-block d-xl-none fs-3 md-fs-2 mt-2 mb-2 mb-lg-2 mt-sm-3"></i><i class = "fa fa-check-circle display-3 m-0 d-none d-xl-block"></i><p class = "mt-0 mt-sm-3 mt-md-4 mt-lg-4 mt-xl-0 d-block d-xl-none">An email was sent to your email address for your account validation. Please check your email box</p><p class = "mt-1 mt-sm-3 mt-md-4 mt-lg-5 mt-xl-0 w-75 d-none d-xl-block" style = "margin-left : 4.7rem;">An email was sent to your email address for your account validation. Please check your email box</p>',
           confirmButtonColor : "#ff9575",
           customClass : { 
              popup : "custom-dialog",
           },
        }).then((result) => {
            if(result.isConfirmed) {
            }
        });
    }, 1500);
})








