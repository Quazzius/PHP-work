<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    ValidateCreditCard.php
    2019-9-2-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Validate Credit Card</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <h1>Validate Credit Card</h1><hr />
        <?php
        //define array of credit card numbers
        $CreditCard = array("", "8910-1234-5678-6543", "OOOO-9123-4567-0123");
        //Loop through numbers
        foreach($CreditCard as $CardNumber){
            //check for any value
            if (empty($CardNumber)){
                echo "<p>This Credit Card Number is invalid becasue it contains an empty string</p>";
            }
            //strip current number of special characters
            else{
                $CreditCardNumber = $CardNumber;
                $CreditCardNumber = str_replace("-","",$CreditCardNumber);
                $CreditCardNumber = str_replace(" ","",$CreditCardNumber);
                //check if all characters are numeric
                if (!is_numeric($CreditCardNumber)){
                    echo "<p>Credit Card Number " . $CreditCardNumber . " is not a valid Credit Card number"
                            . " because it contains a non-numeric character.</p>";
                }
                else{
                    echo "<p>Credit Card Number " . $CreditCardNumber . " is a valid Credit Card number.</p>";
                }
                
            }
        }
        ?>
    </body>
</html>
