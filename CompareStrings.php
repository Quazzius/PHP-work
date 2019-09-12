<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    CompareStrings.php
    2019-9-2-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Compare Strings</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <h1>Compare Strings</h1><hr />
        <?php
        //declare and initialize strings
        $firstString = "Geek2Geek";
        $secondString = "Geezer2Geek";
        //check for string content, no empty strings
        if (!empty($firstString) && !empty($secondString)){
            if ($firstString == $secondString){
                echo "<p>Both strings are the same</p>";
            }
            //strings do not match, compare character content
            else{
                echo "Both strings have " . similar_text($secondString, $firstString) . " characters(s) in common.<br>"
                        . "<br>You must change " . levenshtein($secondString, $firstString) . " character(s) "
                        . "to make the strings the same.";
                
            }
        }
        ?>
    </body>
</html>
