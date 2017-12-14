<?php
require_once 'ensure_auth.php';
if (isset($_POST['reset']) && !empty($_POST['pass'])) {
    require_once '../database/database.php';

    if ($db->reset_password($_SESSION['user'], $_POST['pass'])) {
        header('Location: logout.php');
    } else {
        echo "Wtf did you do?";
    }
}
?>
<form action="reset.php" method="post">
    <input type="password" name="pass" placeholder="New password">
    <input type="submit" name="reset" value="Reset password">
</form>
