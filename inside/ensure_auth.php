<?php
session_start();
if (!isset($_SESSION['user'])) {
    // Force user to log in
    header('Location: ../auth.php');
}