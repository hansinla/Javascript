<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Lab 10</title>
    <?php
        $user;
        if(isset($_REQUEST['user']))
        {
            $user = $_REQUEST['user'];
            session_start();
            $_SESSION['username'] = $user;
            print("Session saved");
        }
    ?>
</head>
<body>
    <form action="session.php" method="post">
        <label for="user">Username:</label><input type="text" id="user" name="user" />
        <br/><input type="submit" value="Save Session" />
        <br/><a href="session2.php">Go to page 2</a>
    </form>
</body>
</html>
