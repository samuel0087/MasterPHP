<?php

if(isset($_COOKIE['Micookie'])){
    setcookie('Micookie', '', time() - 100);
    unset($_COOKIE['Micookie']);
}

header('Location:ver_cookies.php');
