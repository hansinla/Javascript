<?php
    session_start();
    $username = $_SESSION['username'];
    print("Hello " . $username);
    session_destroy();
    setcookie("username", $username, time() + 1800);
    print("<br/><a href='session3.php'>Go to page 3</a>");
?>