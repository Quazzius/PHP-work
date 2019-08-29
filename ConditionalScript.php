<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    ConditionalScript.php
    2019-8-28-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Conditional Script</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php
        $IntVariable = 75; //initialize var
        if ($IntVariable > 100){ //activate if var is greater than 100
            $Result = '$IntVariable is greater than 100';
        }
        else{ //default result
            $Result = '$IntVariable is less than or equal to 100';
        }
        echo "<p>$Result</p>";
        ?>
    </body>
</html>
