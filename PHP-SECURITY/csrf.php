<?php
/* Cross site request forgery is an attack where a logged 
 * in user is tricked to perform an unintended action when their
 * session is hijacked.
 * In the code below, we prevent csrf by adding a token to the user session
 * and adding it to the url.
 * This adds a layer of security because the hacker will be forced to guess the 
 * random token before they can hijack the session.
*/
?>

<?php
session_start();
?>
<html>
 <body>
    <?php
    if (isset($_SESSION["user"])) {
        $_SESSION["token"] = md5(uniqid(mt_rand(), true));
        echo "<p>Welcome back, " . $_SESSION["user"] . "!<br>";
        echo '<a href="server.php?action=logout&csrf=' . $_SESSION["token"] . '">Logout</a></p>';
    }
    else {
    ?>
    <form action="server.php?action=login" method="post">
        <p>The username is: admin</p>
        <input type="text" name="user" size="20">
        <p>The password is: test</p>
        <input type="password" name="pass" size="20">
        <input type="submit" value="Login">
    </form>
    <?php
    }
    ?>
 </body>
</html>
