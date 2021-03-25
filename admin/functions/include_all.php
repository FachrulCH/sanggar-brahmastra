<?php
require_once(__DIR__.'/variables.php');
require_once(__DIR__.'/database.php');
require_once(__DIR__.'/layout.php');

session_start();
function should_login(){
    global $ADMIN_URL;
    # if not login
    if (!isset($_SESSION['name']) && $_SESSION['loggedin'] != true) {
        header("Location: $ADMIN_URL/login.php");
        die();
    }
}

function logout(){
    global $ADMIN_URL;
    session_destroy(); // Hapus semua session
    header("location: $ADMIN_URL"); // Redirect ke halaman index.php
}