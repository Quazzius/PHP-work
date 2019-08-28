<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--Jeff Flanegan
    CWB 208
    InterestArray.php
    2019-8-25-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Interest Array</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php
        //initialize variables
        $InterestRate1 = .0725;
        $InterestRate2 = .0750;
        $InterestRate3 = .0775;
        $InterestRate4 = .0800;
        $InterestRate5 = .0825;
        $InterestRate6 = .0850;
        $InterestRate7 = .0875;
        
        //store variables in array
        $RatesArray = array($InterestRate1, $InterestRate2, $InterestRate3,
            $InterestRate4, $InterestRate5, $InterestRate6, $InterestRate7);
        
        //output array in coulmn with definition followed by value
        echo '$RatesArray[0] = ',"$RatesArray[0]<br/>";
        echo '$RatesArray[1] = ',"$RatesArray[1]<br/>";
        echo '$RatesArray[2] = ',"$RatesArray[2]<br/>";
        echo '$RatesArray[3] = ',"$RatesArray[3]<br/>";
        echo '$RatesArray[4] = ',"$RatesArray[4]<br/>";
        echo '$RatesArray[5] = ',"$RatesArray[5]<br/>";
        echo '$RatesArray[6] = ',"$RatesArray[6]";
        ?>
    </body>
</html>
