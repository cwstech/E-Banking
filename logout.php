<?php
session_start();

if (empty($_SESSION['email']) || empty($_SESSION['pass'])) {
    echo "keep you login first and arter access this page";
} else {
    session_destroy();
    echo "Logout you";
    echo "<a href='login.php'>Login</a>";
}
