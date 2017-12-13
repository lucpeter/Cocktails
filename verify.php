<?php
if (isset($_GET['uid'])) {
    require_once 'database/database.php';

    if ($db->verify_user($_GET['uid'])) {
        header('Location: auth.php');
    } else {
        echo 'CoUlD nOt VeRiFy UsEr';
    }
}
?>
