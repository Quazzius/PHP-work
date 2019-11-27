<?php
    //append to SESSION array
    session_start();
    foreach($_POST as $k=>$v){
    $_SESSION['post'][$k]=$v;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    conference3.php
    2019-11-1-->
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Conference</title>
    </head>
    <body>
    <h1>Conference</h1>
        <h2>Seminars</h2>
        <form method="POST" action="conference4.php" enctype="multipart/form-data">
            JavaScript<input type="checkbox" name="js"/><br>
            PHP<input type="checkbox" name="php"/><br>
            Python<input type="checkbox" name="python"/><br>
            Java<input type="checkbox" name="java"/><br>
            C++<input type="checkbox" name="cpp"/><br>
            <input type="submit" value="Next"/><br>
            <input type="reset" value="Clear"/><br>
        </form>
    <?php
        
	?>
    </body>

</html>