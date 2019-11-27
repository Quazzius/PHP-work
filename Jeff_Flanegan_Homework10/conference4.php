<?php
    session_start();
    foreach($_POST as $k=>$v){
        $_SESSION['post'][$k]=$v;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    conference4.php
    2019-11-1-->
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Conference</title>
        <style>
            fieldset{display: block; float: left;}
            input{display: block; clear: left; float: left; margin-top: 10px; margin-left: 480px}
            </style>
    </head>
    <body>
    <h1>Summary</h1>
    <h3>Jump to a page to make changes by clicking on its title.</h3>
    <form method="POST" action="conference5.php">
        <!--Output SESSION global array data-->
    <fieldset>
        <h2><a href="conference1.php">Personal Info</a></h2>  
        <?php
        echo "<p>First Name: " . $_SESSION['post']["fname"] . "</p>" .
        "<p>Last Name: " . $_SESSION['post']["lname"] . "</p>" .
        "<p>Address: " . $_SESSION['post']["address"] . "</p>" .
        "<p>City: " . $_SESSION['post']["city"] . "</p>" .
        "<p>State: " . $_SESSION['post']["state"] . "</p>" .
        "<p>Zip: " . $_SESSION['post']["zip"] . "</p>" .
        "<p>Phone: " . $_SESSION['post']["phone"] . "</p>" .
        "<p>Email: " . $_SESSION['post']["email"] . "</p>" ;
        ?>
    </fieldset>
    <fieldset>
        <h2><a href="conference2.php">Company Info</a></h2>  
        <?php
       echo "<p>Name: " . $_SESSION['post']["cName"] . "</p>" .
       "<p>Address: " . $_SESSION['post']["cAddress"] . "</p>" .
       "<p>City: " . $_SESSION['post']["cCity"] . "</p>" .
       "<p>State: " . $_SESSION['post']["cState"] . "</p>" .
       "<p>Zip: " . $_SESSION['post']["cZip"] . "</p>" .
       "<p>Phone: " . $_SESSION['post']["cPhone"] . "</p>" .
       "<p>Email: " . $_SESSION['post']["cEmail"] . "</p>" ;
        ?>
    </fieldset>
    <fieldset>
        <h2><a href="conference3.php">Seminars</a></h2>  
        <?php
            //using SESSION for these fields does not allow for the user
            //to "uncheck" a seminar choice.
         echo "<p>JavaScript: " . (isset($_POST['js'])? "yes" : "no") . "</p>" .
         "<p>PHP: " . (isset($_POST['php'])? "yes" : "no") . "</p>" .
         "<p>Python: " . (isset($_POST['python'])? "yes" : "no") . "</p>" .
         "<p>Java: " . (isset($_POST['java'])? "yes" : "no") . "</p>" .
         "<p>C++: " . (isset($_POST['cpp'])? "yes" : "no") . "</p>" ;
        ?>
    </fieldset>
    <input type="submit" vaule="Register"/><br>
</form>   
    </body>

</html>