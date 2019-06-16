<html lang="en">
<head>
    <title>Chapter 3 Lab</title>
</head>
<body>
    <?php
        $testOne = array
        (
            "Smith" => 98,
            "Johnson" => 67,
            "Fields" => 71,
            "Laurel" => 68,
            "Gold" => 91,
            "Braverman" => 88,
            "Stone" => 84,
            "Kiel" => 84
        );
        $testTwo = array
        (
            "Smith" => 75,
            "Johnson" => 88,
            "Fields" => 81,
            "Laurel" => 63,
            "Gold" => 67,
            "Braverman" => 82,
            "Stone" => 77,
            "Kiel" => 81
        );
        $testThree = array(
            "Smith" => 100,
            "Johnson" => 85,
            "Fields" => 76,
            "Laurel" => 71,
            "Gold" => 63,
            "Braverman" => 55,
            "Stone" => 81,
            "Kiel" => 79
        );
        $testFour = array
        (
            "Smith" => 91,
            "Johnson" => 81,
            "Fields" => 77,
            "Laurel" => 70,
            "Gold" => 90,
            "Braverman" => 82,
            "Stone" => 90,
            "Kiel" =>100  
        );
        $scores1 = array_values($testOne);
        for($i=0; $i < count($scores1); $i++)
        {
            $total1 += $scores1[$i];
        }
        echo("The average for test one is: " . ($total1/count($scores1)));
        
        echo ("<br/>");
        
        $scores2 = array_values($testTwo);
        for($i=0; $i < count($scores2); $i++)
        {
            $total2 += $scores2[$i];
        }
        echo("The average for test two is: " . ($total2/count($scores2)));
        
        echo("<br/>");
        
        $scores3 = array_values($testThree);
        for($i=0; $i < count($scores3); $i++)
        {
            $total3 += $scores3[$i];
        }
        echo("The average for test three is: " . ($total3/count($scores3)));
        
        echo("<br/>");
        
        $scores4 = array_values($testFour);
        for($i=0; $i < count($scores4); $i++)
        {
            $total4 += $scores4[$i];
        }
        echo("The average for test one is: " . ($total4/count($scores4)));   
    ?>
    
    <table>
        <tr><td></td><td>Test One</td><td>Test Two</td><td>Test Three</td><td>Test Four</td><td>Average</td></tr>
        <?php
        $students = array_keys($testOne);
        for ($x=0;$x<count($testOne);$x++)
        {
            echo("<tr>");
            echo("<td>" . $students[$x] . "</td>");
            echo("<td>" . ($testOne[$students[$x]]) . "</td>");
            echo("<td>" . ($testTwo[$students[$x]]) . "</td>");
            echo("<td>" . ($testThree[$students[$x]]) . "</td>");
            echo("<td>" . ($testFour[$students[$x]]) . "</td>");
            echo("<td>" . ((($testOne[$students[$x]]) + ($testTwo[$students[$x]]) + ($testThree[$students[$x]]) +($testFour[$students[$x]])))/4 . "</td>");
            echo("</tr>");
        }
        
        ?>
    </table>
</body>
</html>
