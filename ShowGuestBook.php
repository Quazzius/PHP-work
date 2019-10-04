<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    ShowGuestBook.php
    2019-9-29-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Sign Guest Book</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php
            $show = fopen("guestBook.txt", "rb");
            $line = fgets($show);
            while (!feof($show)){
                echo "<p>$line</p>\n";
                $line = fgets($show);
            }
            fclose($show);
        ?>
    </body>
</html>
