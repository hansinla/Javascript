<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Lab 7</title>
</head>
<body>
    <?php
        $fp = fopen("info.csv", 'r') or die("File I/O Error");
        
        $output = "";
        while(!feof($fp))
        {
            $info = fgetcsv($fp, 1024);
            $line = "";
            $line .= "<tr>";
            $line .= "<td>" . $info[0] . "</td>";
            $line .= "<td>" . $info[1] . "</td>";
            $line .= "<td>" . $info[2] . "</td>";
            $line .= "</tr>";
            $output .= $line;
        }
        
        print("<table border='1'>");
        print($output);
        print("</table>");
        
        fclose($fp);
    ?>
<a href="ch7lab.html">Go back to store information</a>
</body>
</html>
