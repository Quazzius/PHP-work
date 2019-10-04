<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    Paycheck.php
    2019-9-15-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Paycheck</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php
        function displayError($fieldName, $errorMsg){
            global $errorCount;
            echo "Error for \"$fieldName\": $errorMsg<br />\n";
            ++$errorCount;
        }
        //validation function for entered data and numeric entry
        function validateNumber($data, $fieldName){
            global $errorCount;
            $data = trim($data);
            if (empty($data)){
                ++$errorCount;
                displayError($fieldName, "This field is required");               
            }else if (!is_numeric($data)){
                displayError($fieldName, "Only numbers accepted");
            }           
            return($data);
        }
        //initialize
        $errorCount = 0;
        $Hours = 0;
        $Wage = 0;
        $Pay = 0;
        $over = 0;
        $overPay = 0;
        //validation
        $Hours = validateNumber($_POST['Hours'], "Hours");
        $Wage = validateNumber($_POST['Wage'], "Wage");
        //error message
        if ($errorCount > 0){
            echo "Please use the \"Back\" button to re-enter the data.<br />\n";
            $errorCount = 0;
        }
        //Paycheck calculation and output
        else{
            if ($Hours > 40){
                $over = $Hours - 40;
                $Hours = 40;                               
                $overPay = $over * ($Wage * 1.5);               
            }            
            $Pay = ($Hours * $Wage) + $overPay; //total
            echo "$Hours hours @ $$Wage/hr = $" . ($Hours * $Wage) . "<br/>\n"; //regular
            if ($over > 0){
                echo "$over hours @ $" . ($Wage * 1.5) . "/hr = $$overPay<br/>\n"; //overtime
            }
            echo "Total for " . ($Hours + $over) . " hours is $Pay<br/><br/>";
            echo "Please use the \"Back\" button if you wish to calculate another paycheck.<br />\n";
        }
        ?>
    </body>
</html>
