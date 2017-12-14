<?php
session_start();
$expire_time = 30;
if (!isset($_SESSION['user'])) {
    // Force user to log in
    header('Location: ../auth.php');
}

//if ($_SESSION['last_activity'] < time() - $_SESSION['expire_time']) {    
if (isset($_SESSION['last_activity']) && $_SESSION['last_activity'] < time() - $expire_time) {    
    header('Location: ./logout.php');
} else {
    $_SESSION['last_activity'] = time();
}
?>
