<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    process_ContactForm.php
    2019-9-15-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Contact Me</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php
        function ValidateInput($data, $fieldName){
            global $errorCount;
            //valudate all fields have been entered
            if(empty($data)){
                echo "\"$fieldName\" is a required field.<br>\n";
                ++$errorCount;
                $retval ="";
            //clean up input
            }else{
                $retval = trim($data);
                $retval = stripcslashes($retval);
            }
            return($retval);
        }
        function ValidateEmail($data, $fieldName){
            global $errorCount;
            //valudate all fields have been entered
            if(empty($data)){
                echo "\"$fieldName\" is a required field.<br>\n";
                ++$errorCount;
                $retval ="";
            
            }
            //clean up input
            else{
                $retval = trim($data);
                $retval = stripslashes($retval);
                //Validate email format
                $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
                if(preg_match($pattern, $retval) == 0){
                    echo "\"$fieldName\" is not a valid e-mail address.<br>\n";
                    ++$errorCount;
                }
            }
            return($retval);
        }
        //form in sticky style
        function displayForm($Sender, $Email, $Subject, $Message){
            ?>
        <h2 style = "text-align:center">Contact Me</h2>
        <form name="contact" action="ContactForm.php" method="post">
            <p>Your Name: <input type="text" name="Sender" value="<?php echo $Sender; ?>"/></p>
            <p>Your E-mail: <input type="text" name="Email" value="<?php echo $Email; ?>"/></p>
            <p>Subject: <input type="text" name="Subject" value="<?php echo $Subject; ?>"/></p>
            <p>Message:<br/> <textarea name="Message"><?php echo $Message; ?></textarea></p>
            <p><input type="reset" value="Clear Form" />&nbsp;&nbsp;<input type="submit" name="Submit" value="Send Form"/></p>
        </form>
        <?php
        }
        $ShowForm = TRUE;
        $errorCount = 0;
        $Sender = "";
        $Email ="";
        $Subject ="";
        $Message ="";
        //validation execution
        if (isset($_POST['Submit'])){
            $Sender = validateInput($_POST['Sender'], "Your Name");
            $Email = validateEmail($_POST['Email'], "Your E-mail");
            $Subject = validateInput($_POST['Subject'], "Subject");
            $Message = validateInput($_POST['Message'], "Message");
            if($errorCount==0){
                $ShowForm = FALSE;
            }
            else{
                $ShowForm = TRUE;
            }
        }
        //display form
        if ($ShowForm == TRUE){
            if ($errorCount>0){//show if failed attempt
                echo "<p>Please re-enter the form information below.</p>\n";
            }
            displayForm($Sender, $Email, $Subject, $Message);
        }
        //all fields were entered correctly
        else{
            $SenderAddress = "$Sender <$Email>";
            $Headers = "From: $SenderAddress\nCC: $SenderAddress\n";
            //send to my email
            $result = mail("jflanegan@student.cccs.edu", $Subject, $Message, $Headers);
            if($result){
                echo "<p>Your message has been sent. Thank you, " . $Sender . ".</p>\n";                   
            }
            else{
                echo "<p>There was an error sending your message, " . $Sender . ".</p>\n";
            }
        }
        ?>
    </body>
</html>
