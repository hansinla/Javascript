<?php
if ($_POST['submit']){
if (!$_POST['email'])$error.="<br/>Pls enter your email";
else if !(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))$error.="<br/>Pls enter a valid email address";
}
if (!$_POST['password'])$error.="<br/>Pls enter your password";
else{
if (strlen($_POST['password'])<8)$error.="<br/>Pls enter a password with at least 8 characters";
if(!preg_match('`[A-Z]`', $_POST['password']))$error.="<br/>Pls include at least one capital letter in your password";
}
if ($error) echo "There were error(s) in your sign up details:".$error;
}
}
?>