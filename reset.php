<?php
if (isset($_GET['uid'])) {
    echo <<<EOD
    <form action="reset.php" method="post">
        <input type="hidden" name="uid" value="$_GET[uid]">
        <input type="password" name="pass" placeholder="New password">
        <input type="submit" name="reset" value="Reset password">
    </form>
EOD;
} else if (isset($_POST['reset']) && !empty($_POST['pass'])) {
    require_once 'database/database.php';

    if ($db->reset_password($_POST['uid'], $_POST['pass'])) {
        header('Location: auth.php');
    } else {
        echo "Wtf did you do?";
    }
} else if (isset($_POST['request_reset']) && !empty($_POST['email'])) {
    $body = <<<EOD
<a href="http://luna.mines.edu/lucpeter/Cocktails/reset.php?uid=$_POST[email]">Click here to reset your password.</a>
EOD;
    mail($_POST['email'], 'Password reset requested for Cocktales', $body);
} else {
?>
    <form action="reset.php" method="post">
        <input type="email" name="email" placeholder="Email you registered with">
        <input type="submit" name="request_reset" value="Send reset email">
    </form>
<?php
}
?>
