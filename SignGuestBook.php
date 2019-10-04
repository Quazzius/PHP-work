<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    SignGuestBook.php
    2019-9-29-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Sign Guest Book</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php
        if(empty($_POST['first_name']) || empty($_POST['last_name'])){
            echo "<p>You must enter your first and last name. Click your browsers"
            . " back button to return to the Guest Book.</p>\n";
        }
        else{
            $firstName = addslashes($_POST['first_name']);
            $lastName = addslashes($_POST['last_name']);
            $guestBook = fopen("guestBook.txt", "ab");
            if (is_writable("guestBook.txt")){
                if(fwrite($guestBook, $lastName . ", " . $firstName . "\n")){
                    echo "<p>Thank you for signing our Guest Book!</p>\n";
                }
                else{
                    echo "<p>Cannot add your name to the Guest Book</p>\n";
                }
            }
            else{
                echo "<p>Cannot write to the file</p>\n";
            }
            fclose($guestBook);    
        }
        ?>
    </body>
</html>
