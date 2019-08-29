<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    TempConversion.php
    2019-8-28-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Temp Conversion</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php
        //loop and output tempratures from 0 - 100 fahrenheit
        for ($f = 0; $f <= 100; $f++){ //f = fahrenheit
            //convert fahrenheit to celsius
            $c = 5.0 / 9.0* ($f - 32);
            // output formatted conversion, rounded to 1 decimal point
            echo "<p>$f&degF = ",round($c, 1)," &degC</p>";
        }
        ?>
    </body>
</html>
