<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    HitCounter.php
    2019-9-29-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Hit Counter</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php
        $CounterFile = "hitcount.txt";
        if (file_exists($CounterFile)){
            $Hits = file_get_contents($CounterFile);
            ++$Hits;
        }
        else{
            $Hits = 1;
        }
        echo "<h1>There have been $Hits hits to this page.</h1>\n";
        if (file_put_contents($CounterFile, $Hits)){
            echo "<p>the counter file has been updated</p>\n";
        }
        ?>
    </body>
</html>
