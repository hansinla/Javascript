<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Chapter 4 Lab</title>
</head>
<body>
    <?php
        $age = 19;
        if ($age<18)
        {
            echo("You're still a pup! Stay in school.");
        } elseif ($age<29)
        {
            echo("This is the prime of your life-- Enjoy it!");
        } elseif ($age<39)
        {
            echo("This is the time to focaus on your career!");
        } elseif ($age<49)
        {
            echo("These might be your prime earning years.");
        } elseif ($age<59)
        {
            echo("Time to get ready for retirement.");
        } else
        {
            echo("What's life's next adventure?");
        }
        echo("<br/>");
        
        $mary = array
        (
            89,
            99,
            63,
            85
        );
        $maryAv = ((array_sum($mary))/count($mary));
        echo("Mary's average is: " . $maryAv);
        echo("<br/>");
        
        if ($maryAv >= 97)
        {
            echo("Mary got an A+");
            echo("<br/>");
        } elseif ($maryAv >= 92)
        {
            echo("Mary got an A");
            echo("<br/>");
        } elseif ($maryAv >= 90)
        {
            echo("Mary got an A-");
            echo("<br/>");
        } elseif ($maryAv >= 87)
        {
            echo("Mary got a B+");
            echo("<br/>");
        } elseif ($maryAv >= 83)
        {
            echo("Mary got a B");
            echo("<br/>");
        } elseif ($maryAv >= 80)
        {
            echo("Mary got a B-");
            echo("<br/>");
        } elseif ($maryAv >= 70)
        {
            echo("Mary got a C");
            echo("<br/>");
        } elseif ($maryAv >= 60)
        {
            echo("Mary got a D");
            echo("<br/>");
        } else {
            echo("Mary got an F");
            echo("<br/>");
        }
        
        $bob = array
        (
            73,
            80,
            81,
            82
        );
        $bobAv = ((array_sum($bob))/count($bob));
        echo("Bob's average is: " . $bobAv);
        echo("<br/>");
        
        if ($bobAv >= 97)
        {
            echo("Bob got an A+");
            echo("<br/>");
        } elseif ($bobAv >= 92)
        {
            echo("Bob got an A");
            echo("<br/>");
        } elseif ($bobAv >= 90)
        {
            echo("Bob got an A-");
            echo("<br/>");
        } elseif ($bobAv >= 87)
        {
            echo("Bob got a B+");
            echo("<br/>");
        } elseif ($bobAv >= 83)
        {
            echo("Bob got a B");
            echo("<br/>");
        } elseif ($bobAv >= 80)
        {
            echo("Bob got a B-");
            echo("<br/>");
        } elseif ($bobAv >= 70)
        {
            echo("Bob got a C");
            echo("<br/>");
        } elseif ($bobAv >= 60)
        {
            echo("Bob got a D");
            echo("<br/>");
        } else {
            echo("Bob got an F");
            echo("<br/>");
        }
        
        $mark = array
        (
            90,
            95,
            91,
            70
        );
        $markAv = ((array_sum($mark))/count($mark));
        echo("Mark's average is: " . $markAv);
        echo("<br/>");
        
        if ($markAv >= 97)
        {
            echo("Mark got an A+");
            echo("<br/>");
        } elseif ($markAv >= 92)
        {
            echo("Mark got an A");
            echo("<br/>");
        } elseif ($markAv >= 90)
        {
            echo("Mark got an A-");
            echo("<br/>");
        } elseif ($markAv >= 87)
        {
            echo("Mark got a B+");
            echo("<br/>");
        } elseif ($markAv >= 83)
        {
            echo("Mark got a B");
            echo("<br/>");
        } elseif ($markAv >= 80)
        {
            echo("Mark got a B-");
            echo("<br/>");
        } elseif ($markAv >= 70)
        {
            echo("Mark got a C");
            echo("<br/>");
        } elseif ($markAv >= 60)
        {
            echo("Mark got a D");
            echo("<br/>");
        } else {
            echo("Mark got an F");
            echo("<br/>");
        }
        
    ?>
</body>
</html>
