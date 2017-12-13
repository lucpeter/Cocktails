<?php
session_start();
if (!isset($_SESSION['user'])) {
    // Force user to log in
    header('Location: ../auth.php');
}

if ($_SESSION['last_activity'] < time() - $_SESSION['expire_time']) {    
    header('Location: ./logout.php');
} else {
    $_SESSION['last_activity'] = time();
}
?>
