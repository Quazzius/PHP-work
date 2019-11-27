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
		if (($_POST['first_name']) == ""|| ($_POST['last_name']) == ""){
            echo "You must enter your ﬁrst and last
                name! Click your browser's Back button to
                return to the Guest Book form.";
        }
        else {
            $DBConnect = @mysqli_connect("localhost", "root", "");
            if ($DBConnect === FALSE)
                echo "Unable to connect to the database
                    server.". "Error code " . mysqli_errno()
                    . ": " . mysqli_error() . "</p>";
	    else {
            $DBName = "guestbook";
            if (!mysqli_select_db($DBConnect, $DBName)) {
                $SQLstring = "CREATE DATABASE $DBName";
                $QueryResult = @mysqli_query($DBConnect, $SQLstring);
                if ($QueryResult == FALSE)
                        echo "Unable to execute the query.". "Error code " . mysqli_errno($DBConnect)
                        . ": " . mysqli_error($DBConnect). "";
                else
                    echo "You are the ﬁrst visitor!";
            }
            mysqli_select_db($DBConnect, $DBName);
            $TableName = "visitors";
            $SQLstring = "SHOW TABLES LIKE '$TableName'";
            $QueryResult = @mysqli_query($DBConnect, $SQLstring);
            if (mysqli_num_rows($QueryResult) === 0) {
               $SQLstring = "CREATE TABLE $TableName(countID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
               first_name VARCHAR(40), last_name VARCHAR(40))";
               $QueryResult = @mysqli_query($DBConnect, $SQLstring);
               if ($QueryResult === FALSE)
                     echo "<p>Unable to create the table.</p>". "<p>Error code " . 
                     mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
            }
            $FirstName = stripslashes($_POST['first_name']);
            $LastName = stripslashes($_POST['last_name']);
            $SQLstring = "INSERT INTO $TableName
            VALUES(NULL, '$FirstName','$LastName')";
            $QueryResult = @mysqli_query($DBConnect, $SQLstring);
            if ($QueryResult === FALSE)
                echo "Unable to execute the query.". "Error code " . mysqli_errno($DBConnect)
                    . ": " . mysqli_error($DBConnect) . "";
            else
                echo "Thank you for signing our guest book!";
                  
            mysqli_close($DBConnect);
            }
        }
	?>
    </body>

</html>