const signup = document.getElementById('btn-submit');
const inputs = document.getElementsByTagName('input');
const imgUser = document.getElementById('imgUser');
const uploadIcon = document.getElementById('upload-icon');

uploadIcon.addEventListener('click', function() {
    const inputFile = document.createElement('input');
    inputFile.type = "file";
    inputFile.accept = "image/*";
    inputFile.id = "uploadFile";
    inputFile.name = "imgUser";
    inputFile.click();

    inputFile.addEventListener('change', function() {
        const file = inputFile.files[0];

        if (file) {
            const formData = new FormData();
            formData.append('imgUser', file);

            fetch('upload.php', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                if (data.success) {
                    imgUser.src = 'image/'+data.fileName;
                } else {
                    console.error('Upload failed');
                }
            })
            .catch(error => console.error('Fetch Error:', error));
        }
    });
});


flatpickr("#birthDate", {
    dateFormat: "d-m-Y", 
    enableTime : false,
    maxDay : "today",
    yearRange: [1900, new Date().getFullYear()], 
})

function destroyAndInitFlatpickr() {
    const birthdateInput = document.getElementById("birthDate");
    flatpickr(birthdateInput).destroy();

    flatpickr(birthdateInput, {
        dateFormat: "d-m-Y",
        maxDate: "today",
        yearRange: [1900, new Date().getFullYear()],
    });
}
document.getElementById("birthDate").addEventListener("change", destroyAndInitFlatpickr);

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