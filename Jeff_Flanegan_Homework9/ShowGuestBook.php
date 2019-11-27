<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Jeff Flanegan
    CWB 208
    SignGusetBook.php
    2019-10-21-->
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

    </head>
    <body>
    <?php
        $DBName = 'guestbook';
        $DBConnect = new mysqli('localhost', 'root', "", $DBName);
        if ($DBConnect->connect_error){
            die("Unable to connect to the database
                    server.". $DBConnect->connect_error); 
        }                  
        else{                      
            $TableName = "visitors";
            $SQLstring = "SELECT * FROM $TableName";
            
            if(($Result = $DBConnect->query($SQLstring)) == FALSE){
                echo "<p>There are no entries in the guest book!</p>";
            }
            else{
                echo "<p>The following visitors have signed the guest book:</p>";
                echo "<table width='100%' border='1'>";
                echo "<tr><th>First Name</th><th>Last Name</th></tr>";
                while($Row = $Result->fetch_assoc()){
                    echo "<tr><td><center>{$Row['first_name']}</center></td>
                    <td><center>{$Row['last_name']}</center></td></tr>";
                }
            }
            mysqli_free_result($Result);                            
            mysqli_close($DBConnect);
        }
	?>
    </body>

</html>