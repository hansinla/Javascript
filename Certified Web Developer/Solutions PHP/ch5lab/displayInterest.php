<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Display Interest</title>
</head>
<body>
    <table>
    <tr>
        <td><strong>Month</strong></td>
        <td><strong>Monthly interest</strong></td>
        <td><strong>Months Balance</strong></td>
    </tr>
    <?php
        $principal = $_REQUEST['principal'];
        //echo ($principal . "<br/>");
        $interestRate = $_REQUEST['interestRate'];
        //echo ($interestRate . "<br/>");
        $term = $_REQUEST['term'];
        //echo ($term . "<br/>");
        $monthlyRate = $interestRate/12;
        for ($x=0; $x<($term*12); $x++){
            $monthsInterest = ($principal*$monthlyRate);
            $monthBalance = ($principal + $monthsInterest);
            $principal = $monthBalance;
            echo("<tr>");
            echo("<td>" . ($x+1) . "</td>");
            printf("<td>$%0.2f</td>", $monthsInterest);
            printf("<td>$%0.2f</td>", $monthBalance);
            echo("</tr>");
        }
    ?>
    </table>
</body>
</html>
