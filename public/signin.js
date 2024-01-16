'use strict'

const signin = document.getElementById('btn-signin');
const inputs = document.getElementsByTagName('input');
const lockPwd = document.getElementById('lock-pwd');

inputs[2].addEventListener('input', function() {
    if(inputs[2].value.length > 0) {
        lockPwd.classList.replace('d-none', 'd-block');
   } else {
       lockPwd.classList.replace('d-block', 'd-none');
   }
});

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

signin.addEventListener('click', function() {
    signin.style.transform = "scale(.95)";
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
        window.location.href = "explore.html";
    }, 4000);
})








