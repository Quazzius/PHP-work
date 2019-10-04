<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    RegisterBowler.php
    2019-9-29-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Register Bowler</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php
        if(empty($_POST['name']) || empty($_POST['age']) || empty($_POST['avg'])){
            echo "<p>You must enter your first name, last name and bowling average(enter 0 if you don't have one).<br>"
            . "Click your browsers back button to return to the Registration page.</p>\n";
        }
        else{
            $name = addslashes($_POST['name']);
            $age = addslashes($_POST['age']);
            $avg = $_POST['avg'];
            $bowlers = fopen("bowlers.txt", "ab");
            if (is_writable("bowlers.txt")){
                if(fwrite($bowlers, $name . ", " . $age . ", " . $avg . "\n")){
                    echo "<p>Thanks and good luck!</p>\n";
                }
                else{
                    echo "<p>Unable to add your name to the registration</p>\n";
                }
            }
            else{
                echo "<p>Cannot write to the file</p>\n";
            }
           fclose($bowlers);    
        }
        ?>
    </body>
</html>
