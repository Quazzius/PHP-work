<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    conference1.php
    2019-11-1-->
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Conference</title>
    </head>
    <body>
        <h1>Conference</h1>
        <h2>Personal Information</h2>
        <?php
        //sticky values
        $fname = ""; $lname = ""; $address = ""; $city = "";
        $state = ""; $zip = ""; $phone = ""; $email = "";
        if (isset($_SESSION['post']['fname'])){
            $fname = $_SESSION['post']['fname'];
            $lname = $_SESSION['post']['lname'];
            $address = $_SESSION['post']['address'];
            $city = $_SESSION['post']['city'];
            $state = $_SESSION['post']['state'];
            $zip = $_SESSION['post']['zip'];
            $phone = $_SESSION['post']['phone'];
            $email = $_SESSION['post']['email'];
        }
        ?>
        <form method="POST" action="conference2.php" enctype="multipart/form-data">
            First name:<input type="text" name="fname" value="<?php echo $fname; ?>"required/><br>
            Last name:<input type="text" name="lname" value="<?php echo $lname; ?>"required/><br>
            Address:<input type="text" name="address" value="<?php echo $address; ?>" required/><br>
            City:<input type="text" name="city" value= "<?php echo $city; ?>" required/><br>
            State:<input type="text" name="state" value= "<?php echo $state; ?> "required/><br>
            Zip:<input type="number" name="zip" value ="<?php echo $zip; ?>" required/><br>
            Phone Number:<input type="tel" name="phone" value="<?php echo $phone; ?>" required/><br>
            Email:<input type="email" name="email" value="<?php echo $email; ?>" required/><br>
            <input type="submit" value="Next"/><br>
            <input type="reset" value="Clear" />               
        </form>

    </body>

</html>