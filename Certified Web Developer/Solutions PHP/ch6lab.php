<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Lab 6: Temp Converter</title>
    <style type="text/css">
        body
        {
            font-family: sans-serif;
            font-size:.85em;
        }
    </style>
</head>
<body>
    <?php
        function fToC ($fTemp)
        {
            $cTemp = (5/9)*($fTemp-32);
            return ($cTemp);
        }
        function cToF ($cTemp)
        {
            $fTemp = (9/5)*$cTemp+32;
            return ($fTemp);
        }
        
        if(isset($_REQUEST['input']) && isset($_REQUEST['temp']))
        {
            $temp = $_REQUEST['temp'];
            $choice = $_REQUEST['input'];
            if($choice == "F")
            {
                printf("%0.2f&deg; Celsius", fToC($temp));
            } else {
                printf("%0.2f&deg; Farenheit", cToF($temp));
            }
        }
    ?>
    <form action="lab6.php" method="post">
        <p>Enter Temperature:<input type="text" name="temp" /><br/>
        <input type="radio" name="input" value="F"/>Farenheit to Celsius
        <br/>
        <input type="radio" name="input" value="C" />Celsius To Farenheit
        <br/>
        <input type="submit" />
        </p>
    </form>
</body>
</html>
