<?php
session_start();

if ($_GET['state'] == 'disconnect'){
    $_SESSION['admin'] = false;
    header('location:./page-login.php');
}