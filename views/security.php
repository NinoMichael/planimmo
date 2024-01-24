<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planimmo - Security</title>
    <link rel="stylesheet" href="bootstrap/BootCss/bootstrap.css">
    <script defer src="bootstrap/BootJs/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="fontawesome/all.css">
    <link rel="stylesheet" href="fontawesome/brands.css">
    <link rel="stylesheet" href="views/security.css">

</head>

<body class = "root-setting">
    <header id = "header-setting" class="header-setting">
        <div class="d-flex flex-row">
        <div class = "navbar navbar-expand-md d-flex flex-row-reverse d-md-flex flex-md-row">
          <img class="navbar-brand custom-m-logo" src="image/logo.png" alt="Planimmo's logo" width="120px">
          <div class="ms-auto navbar-dark position-relative custom-m-menu">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-content"
                  aria-controls="menu-content" aria-expanded="false" aria-label="Toggle Navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
  
                  <nav class="p-4 navbar-nav nav-pills justify-content-center collapse-md navbar-md-collapse 
                  custom-position bg-menu1"
                  id="menu-content">
                     <a class="nav-item custom-fs-nav nav-link text-light" href="home">Home</a>
                     <a class="ms-md-4 custom-fs-nav nav-item nav-link text-light" href="explore">Explore</a>
                     <a class="ms-md-4 custom-fs-nav nav-item nav-link text-light active" href="blog">Blog</a>
                     <a class="ms-md-4 custom-fs-nav nav-item nav-link text-light" href="blog#contactUs">Support</a>
                  </nav>
  
           </div>
           <div>
              <button id = "register" type="button" class = "btn bg-menu2 custom-fs-nav custom-register-position overflow-hidden">Register</button>
          </div>
          </div>
         </div>
  
         <div class = "position-relative mx-3 d-block d-sm-none">
            <img class = "custom-img-header rounded" src="image/house-secure.jpg" alt="Photo of secure modern building">
            <div class="custom-lead-pos mt-3 px-5">
                <p class = "p3-fs-6 text-light">At <span class = "title-lead">Planimmo</span>, we prioritize the security of your information to ensure a safe and trustworthy online experience. Our commitment extends to implementing robust security measures, and we want
                    to keep you informed about the steps we take to protect your data.
                </p>
            </div>
         </div>
  
         <div class = "d-none d-sm-block d-sm-flex flex-sm-row shadow-glass">
            <div class="col-sm-5 mt-md-4 mt-lg-0">
                <p class = "p3-fs-6">At <span class = "title-lead">Planimmo</span>, we prioritize the security of your information to ensure a safe and trustworthy online experience. Our commitment extends to implementing robust security measures, and we want
                to keep you informed about the steps we take to protect your data.<p>
            </div>
            <div class="col-sm-6 col-lg-7">
                <img class = "img-fluid rounded ms-sm-4 mt-sm-4 ms-md-5 h-75" src="image/house-secure.jpg" alt="Photo of secure modern building">
            </div>
         </div>
      </header>

    <main class = "col-12 px-3 px-xl-5">
        <div class = "mx-4 mx-md-5 mt-4 mt-md-5">
            <div class = "d-md-flex flex-md-row justify-content-md-between">
                <div class = "col-md-6">
                    <h3 id = "privacy" class = "d-block d-lg-none h5 title-lead">Privacy policy</h3>
                    <h3 id = "privacy" class = "d-none d-lg-block h4 title-lead mt-3 mb-xl-2">Privacy policy</h3>
                    <p class = "d-block d-xl-none fs-6">We adhere to a comprehensive Privacy Policy that outlines how we collect, store, and use user information. This poilicy is designed to meet the highest standards of privacy protection, 
                        giving you confidence in the handling of your personal data</p>
                        <p class = "d-none d-xl-block fs-5 col-xl-11">We adhere to a comprehensive Privacy Policy that outlines how we collect, store, and use user information. This poilicy is designed to meet the highest standards of privacy protection, 
                            giving you confidence in the handling of your personal data</p>
                    <button id = "contact" class = "d-none d-md-block mt-3 btn bg-gray text-light mt-xl-4 px-xl-4 py-xl-2" type="button">Learn more</button>
                </div>
                <img class = "img-fluid col-md-5" src="image/privacy.jpg" alt="Picture of secure real estate">
            </div>
            <button class = "d-block d-md-none mt-3 btn bg-gray text-light" type="button">Learn more</button>
        </div>
        <div class = "mx-4 mt-5 mx-md-5 d-md-flex flex-md-row-reverse justify-content-md-between">
            <div class = "col-md-6">
                <h3 class = "d-block d-lg-none h5 title-lead">Data encryption protocols</h3>
                <h3 class = "d-none d-lg-block h4 title-lead mt-4 mb-xl-4">Data encryption protocols</h3>
                <p class = "d-block d-xl-none fs-6">Your data's safety is paramount, and to achieve this, all information shared on Planimmo is encrypted using state-of-the-art encryption technologies. This encryption process ensures that
                    your data remains confidential during transmission, safeguarding it from unauthorized access.</p>
                    <p class = "d-none d-xl-block fs-5 col-xl-11">Your data's safety is paramount, and to achieve this, all information shared on Planimmo is encrypted using state-of-the-art encryption technologies. This encryption process ensures that
                        your data remains confidential during transmission, safeguarding it from unauthorized access.</p>
            </div>
            <img class = "img-fluid col-md-5" src="image/data-encryption.png" alt="Picture of secure real estate">
        </div>
        <div class = "mx-4 mt-5 mx-md-5 d-md-flex flex-md-row justify-content-md-between">
            <div class = "col-md-6">
                <h3 class = "d-block d-lg-none h5 title-lead">Protective measures against online threats</h3>
                <h3 class = "d-none d-lg-block h4 title-lead mt-4 mb-xl-4">Protective measures against online threats</h3>
                <p class = "d-block d-xl-none fs-6">Our website incorporates advanced security measures to counteract online threats such as malware, denial-of-service attacks, and intrusion attempts. We continuously monitor for suspicious 
                activities to maintain a secure browsing environment for our users.</p>
                <p class = "d-none d-xl-block fs-5 col-xl-11">Our website incorporates advanced security measures to counteract online threats such as malware, denial-of-service attacks, and intrusion attempts. We continuously monitor for suspicious 
                    activities to maintain a secure browsing environment for our users.</p>
            </div>
            <img class = "img-fluid col-md-5" src="image/online-threat.jpg" alt="Picture of secure real estate">
        </div>
        <div class = "mx-4 mt-5 mx-md-5 d-md-flex flex-md-row-reverse justify-content-md-between">
            <div class = "col-md-6">
                <h3 class = "d-block d-lg-none h5 title-lead">Secure authentification processes</h3>
                <h3 class = "d-none d-lg-block h4 title-lead mt-4 mb-xl-4">Secure authentification processes</h3>
                <p class = "d-block d-xl-none fs-6">Access to your Planimmo account is fortified with secure authentification methods. Beyond traditional credentials, additional verification techniques are employed to ensure that only 
                authorized individuals can access your information, enhancing the overall security of your account.</p>
                <p class = "d-none d-xl-block fs-5 col-xl-11">Access to your Planimmo account is fortified with secure authentification methods. Beyond traditional credentials, additional verification techniques are employed to ensure that only 
                    authorized individuals can access your information, enhancing the overall security of your account.</p>
            </div>
            <img class = "img-fluid col-md-5" src="image/secure-auth.png" alt="Picture of secure real estate">
        </div>
        <div class = "mx-4 mt-5 mx-md-5 d-md-flex flex-md-row justify-content-md-between">
            <div class = "col-md-6">
                <h3 class = "d-block d-lg-none h5 title-lead">Regular security updates</h3>
                <h3 class = "d-none d-lg-block h4 title-lead mt-5 mb-xl-4">Regular security updates</h3>
                <p class = "d-block d-xl-none fs-6">We are proactive in maintaining our technological infrastructure by regularly applying the latest security patches. This ongoing effort ensures that our site stays ahead of 
                    potential vulnerabilities, providing you with a consistently secure online environment.</p>
                <p class = "d-none d-xl-block fs-5 col-xl-11">We are proactive in maintaining our technological infrastructure by regularly applying the latest security patches. This ongoing effort ensures that our site stays ahead of 
                    potential vulnerabilities, providing you with a consistently secure online environment.</p>
            </div>
           <img class = "img-fluid col-md-5" src="image/secure-update.png" alt="Picture of secure real estate">
        </div>
        <div class = "mx-4 mt-5 mx-md-5 d-md-flex flex-md-row-reverse justify-content-md-between">
            <div class = "col-md-6">
                <h3 class = "d-block d-lg-none h5 title-lead">Commitment to Privacy</h3>
                <h3 class = "d-none d-lg-block h4 title-lead mt-5 mb-xl-4">Commitment to Privacy</h3>
                <p class = "d-block d-xl-none fs-6">Your privacy is of utmost importance to us. We commit to not sharing your personal information with third parties without your explicit consent. Your data remains confidential
                and is utilized solely for the purposes you have chosen, reinforcing our dedication to protecting your privacy.</p>
                <p class = "d-none d-xl-block fs-5 col-xl-11">Your privacy is of utmost importance to us. We commit to not sharing your personal information with third parties without your explicit consent. Your data remains confidential
                and is utilized solely for the purposes you have chosen, reinforcing our dedication to protecting your privacy.</p>
            </div>
            <img class = "img-fluid col-md-5" src="image/commit-privacy.png" alt="Picture of secure real estate">
        </div>
        <div class = "mx-4 mt-5 mx-md-5 d-md-flex flex-md-row justify-content-md-between">
            <div class = "col-md-6">
                <h3 class = "d-block d-lg-none h5 title-lead">User Security tips</h3>
                <h3 class = "d-none d-lg-block h4 title-lead mt-4 mb-xl-4">User Security tips</h3>
                <p class = "d-block d-xl-none fs-6">In addition to our security measures, we offer practical tips to users for creating strong passwords, managing account information, and raising awareness about potential online threats. Educating
                    our users on security best practices is a key aspect of our commitment to their safety.</p>
                <p class = "d-none d-xl-block fs-5 col-xl-11">In addition to our security measures, we offer practical tips to users for creating strong passwords, managing account information, and raising awareness about potential online threats. Educating
                    our users on security best practices is a key aspect of our commitment to their safety.</p>
            </div>
           <img class = "img-fluid col-md-5" src="image/security-tips.png" alt="Picture of secure real estate">
        </div>
        <div class = "mx-4 mt-5 mx-md-5 d-md-flex flex-md-row-reverse justify-content-md-between">
            <div class = "col-md-6">
                <h3 class = "d-block d-lg-none h5 title-lead">Security update history</h3>
                <h3 class = "d-none d-lg-block h4 title-lead mt-5 mb-xl-4">Security update history</h3>
                <p class = "d-block d-xl-none fs-6">For transparency, we maintain a comprehensive list of recent security updates performed on our site. This serves as a testament to our ongoing commitment to strenghtening the security
                    features of Planimmo.</p>
                <p class = "d-none d-xl-block fs-5 col-xl-11">For transparency, we maintain a comprehensive list of recent security updates performed on our site. This serves as a testament to our ongoing commitment to strenghtening the security
                    features of Planimmo.</p>
            </div>
           <img class = "img-fluid col-md-5" src="image/security-update.png" alt="Picture of secure real estate">
        </div>
        <div class = "mx-4 mt-5 mx-md-5 d-md-flex flex-md-row justify-content-md-between">
            <div class = "col-md-6">
                <h3 class = "d-block d-lg-none h5 title-lead">Contacting Security support</h3>
                <h3 class = "d-none d-lg-block h4 title-lead mt-4 mb-xl-4">Contacting Security support</h3>
                <p class = "d-block d-xl-none fs-6">Should you have any security-related questions or wish to report any concerns, our dedicated security support team is here to assist you. We encourage open communication and value your feedback in
                    ensuring a secure user experience.</p>
                <p class = "d-none d-xl-block fs-5 col-xl-11">Should you have any security-related questions or wish to report any concerns, our dedicated security support team is here to assist you. We encourage open communication and value your feedback in
                    ensuring a secure user experience.</p>
            </div>
            <img class = "img-fluid col-md-5" src="image/security-support.png" alt="Picture of secure real estate">
        </div>
        <div class = "mx-4 mt-5 mx-md-5 ">
            <div class = "d-md-flex flex-md-row-reverse justify-content-md-between">
                <div class = "col-md-6">
                    <h3 class = "d-block d-lg-none h5 title-lead">Industry certifications</h3>
                    <h3 class = "d-none d-lg-block h4 title-lead mt-4 mb-xl-4">Industry certifications</h3>
                    <p class = "d-block d-xl-none fs-6">As part of our commitment to security, we may hold certifications or comply with industry standards. These certifications reinforce our dedication to maintaining a high level of security in line with
                    recognized benchmarks.</p>
                    <p class = "d-none d-xl-block fs-5 col-xl-11">As part of our commitment to security, we may hold certifications or comply with industry standards. These certifications reinforce our dedication to maintaining a high level of security in line with
                        recognized benchmarks.</p>
                    <button class = "d-none d-md-block btn bg-gray text-light mt-3 mt-xl-4 px-xl-4 py-xl-2 overflow-hidden position-relative" type="button">Contact us</button>
                </div>
                <img class = "img-fluid col-md-5" src="image/certificate.png" alt="Picture of secure real estate">
            </div>
            <button class = "d-block d-md-none btn bg-gray text-light mt-3 overflow-hidden position-relative" type="button">Contact us</button>
        </div>
        <aside class = "bg-root p-3 p-lg-4 rounded">
            <p class = "p-secure">At planimmo, security is not just a feature; it's a fundamental aspect of our service. We want you to browse, buy, or rent properties with complete peace of mind, knowing that your data is secure with us.</p>
        </aside>
    </main>

    <footer class = "modal-footer bg-dark text-light d-sm-flex flex-sm-row mt-lg-0">
        <div class= "col-12 d-flex float-none justify-content-between flex-sm-column col-sm-5 me-sm-2">
            <img class = "ms-3 mt-2" src="image/logo.png" alt="Logo de Planimmo" style="width : 90px; height : 60px;">
            <p style="font-size: 0.75em; width : 60%;">The trusted real estate agency providing expertise, transparency and exceptional service in every transaction. Your reliable real estate partner</p>
        </div>

        <div class="col-12 col-sm-5 d-flex flex-row me-sm-5" style = "font-size: 0.75em;">
            <div class="col-4 ms-4 ms-sm-0 me-sm-3">
                <h3 class = "h6">Services</h3>
                <ul class = "list-unstyled">
                    <li><a class = "text-light" href="explore" style = "text-decoration: none;">Estate market</a></li>
                    <li><a class = "text-light" href="blog" style = "text-decoration: none;">Blog</a></li>
                    <li><a class = "text-light" href="sell" style = "text-decoration: none;">Sell</a></li>
                </ul>
            </div>
            <div class="col-4 me-sm-3">
                <h3 class = "h6">Company</h3>
                <ul class = "list-unstyled">
                    <li><a class = "text-light" href="blog#aboutUs" style = "text-decoration: none;">Company work</a></li>
                    <li><a class = "text-light" href="privacy" style = "text-decoration: none;">Privacy policy</a></li>
                    <li><a class = "text-light" href="" style = "text-decoration: none;">Security</a></li>
                </ul>
            </div>
            <div class="col-4">
                <h3 class = "h6">Support</h3>
                <ul class = "list-unstyled">
                    <li><a class = "text-light" href="blog#aboutUs" style = "text-decoration: none;">About us</a></li>
                    <li><a class = "text-light" href="blog#contactUs" style = "text-decoration: none;">Contact</a></li>
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

     <script src="security.js"></script>
</body>
</html>