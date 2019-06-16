<?php
    print(date("D F d, Y h:i:s"));
    $username = $_COOKIE["username"];
    print("<br/>From Cookie: " . $username);
    
    $message = "You have reached the end of PHP for Beginners.";
    print("<br/>");
    print("String length: " . strlen($message));
    
    print("<br/>");
    print("<br/>");
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $newMessage = str_replace($vowels, "X", $message);
    print($newMessage);
    
    print("<br/>");
    print("<br/>");
    $messageArray = explode(" ", $message);
    for($i=0;$i<count($messageArray);$i++)
    {
        print($messageArray[$i] . "<br/>");
    }
?>