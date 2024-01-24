<?php

if(empty($_GET['page'])) {
    require "views/home.php";
} else {
    switch($_GET['page']) {
        case "home" : 
            require "views/home.php";
            break;
        case "explore" : 
            require "views/explore.php";
            break;
        case "property" : 
            require "views/property.php";
            break;
        case "blog" : 
            require "views/blog.php";
            break;
        case "security" : 
            require "views/security.php";
            break;
        case "login" : 
            require "views/signin.php";
            break;
        case "signup" : 
            require "views/signup.php";
            break;
        case "create-account" : 
            require "views/create.php";
            break;
        case "account-setting" : 
            require "views/account-setting.php";
            break;
        case "password-recovery" : 
            require "views/forgotten-password.php";
            break;
        case "reset-password" : 
            require "views/reset-password.php";
            break;
    }
}