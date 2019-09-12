<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    ValidateLocalAddress.php
    2019-9-2-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Validate Local Address</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <h1>Validate Local Address</h1><hr />
        <?php
        //declare and initialize email array
        $email = array("jsmith123@example.org", "john.smith.mail@example.org", "john.smith@example.org",
             "john.smith@example", "jsmith123@mail.example.org");
        //loop through email array to determine validity of addresses using regular expressions
        foreach ($email as $emailAddress){
            echo "The email address &ldquo;" . $emailAddress . "&rdquo; ";
            if (preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" .
                    "@((mail\.)?)example\.org$/i", $emailAddress) == 1){
                    echo " is a valid e-mail address.<br>";
            }
            else{
                echo " is not a valid e-mail address.<br>";
            }
        }
        ?>
    </body>
</html>
