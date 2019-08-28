<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--Jeff Flanegan
    CWB 208
    DatesArray.php
    2019-8-25-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Days Array</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php
        //Initialize array values and output
        $Days = array("Sunday", " Monday", " Tuesday", " Wednesday", " Thursday", " Friday", " Saturday");
        echo "<strong>The days of the week in English are:</strong><br/>$Days[0]<br/>$Days[1]<br/>$Days[2]<br/>"
                . "$Days[3]<br/>$Days[4]<br/>$Days[5]<br/>$Days[6]<br/>";
        //Re-assign array vaules and output new values
        $Days = array("Dimanche", " Lundi", " Mardi", " Mercredi", " Jeudi", " Vendredi", " Samedi");
        echo "<strong>The days of the week in French are:</strong><br/>$Days[0]<br/>$Days[1]<br/>$Days[2]<br/>"
                . "$Days[3]<br/>$Days[4]<br/>$Days[5]<br/>$Days[6]";
        ?>
    </body>
</html>
