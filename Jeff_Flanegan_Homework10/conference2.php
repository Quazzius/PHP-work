<?php
    //create SESSION array
    session_start();
    foreach($_POST as $k=>$v){
    $_SESSION['post'][$k]=$v;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    conference2.php
    2019-11-1-->
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Conference</title>
    </head>
    <body>
    <h1>Conference</h1>
        <h2>Company Information</h2>
        <?php
        //sticky values
        $cName = ""; $cAddress = ""; $cCity = "";
        $cState = ""; $cZip = ""; $cPhone = ""; $cEmail = "";
        //since all fields are required, only one field needs checked
        if (isset($_SESSION['post']['fname'])){
            $cName = $_SESSION['post']['cName'];
            $cAddress = $_SESSION['post']['cAddress'];
            $cCity = $_SESSION['post']['cCity'];
            $cState = $_SESSION['post']['cState'];
            $cZip = $_SESSION['post']['cZip'];
            $cPhone = $_SESSION['post']['cPhone'];
            $cEmail = $_SESSION['post']['cEmail'];
        }
        ?>
        <form method="POST" action="conference3.php" enctype="multipart/form-data">
            Company name:<input type="text" name="cName" value="<?php echo $cName; ?>" required/><br>
            Address:<input type="text" name="cAddress" value="<?php echo $cAddress; ?>" required/><br>
            City:<input type="text" name="cCity" value="<?php echo $cCity; ?>" required/><br>
            State:<input type="text" name="cState" value="<?php echo $cState; ?>" required/><br>
            Zip:<input type="number" name="cZip" value="<?php echo $cZip; ?>" required/><br>
            Phone Number:<input type="tel" name="cPhone" value="<?php echo $cPhone; ?>" required/><br>
            Email:<input type="email" name="cEmail" value="<?php echo $cEmail; ?>" required/><br>
            <input type="submit" value="Next"/><br>
            <input type="reset" value="Clear" />         
        </form>
    <?php
        
	?>
    </body>

</html>